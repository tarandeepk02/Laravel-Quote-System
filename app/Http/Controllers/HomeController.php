<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\Lead;
use Illuminate\Support\Facades\Crypt;
use Session;
use Mail;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        // Middleware or any constructor logic can be added here if needed
    }

    /**
     * Show the homepage.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the About Us page with FAQs.
     */
    public function aboutUs()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('about-us', ['faqs' => $faqs]);
    }

    /* ---------------------- Coroplast Signs ---------------------- */

    /**
     * Store Coroplast Signs form data in session and redirect to quote.
     */
    public function coroplastSignsStore(Request $request)
    {
        Session::put('form_data', $request->all());
        Session::put('product', 'Coroplast Signs');
        return redirect()->route('quote');
    }

    /**
     * Render Coroplast Sign partial with data.
     */
    public function coroplastSign(Request $request)
    {
        $val = $request->side;
        $qty = $request->qty;
        $adon = $request->adon;
        $adon_val = $request->adon_val;
        $step = $request->step;
        $cut = $request->cut;
        $sheet_count = $request->sheet_count;

        return view('partials.coroplast-sign', compact('val', 'qty', 'adon', 'adon_val', 'step', 'cut', 'sheet_count'));
    }

    /**
     * Show Coroplast Signs page with FAQs.
     */
    public function coroplastSigns()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('coroplast-signs', ['faqs' => $faqs]);
    }

    /* ---------------------- Banners ---------------------- */

    /**
     * Store Banners form data in session and redirect to quote.
     */
    public function bannersStore(Request $request)
    {
        Session::put('form_data', $request->all());
        Session::put('product', 'Banners');
        return redirect()->route('quote');
    }

    /**
     * Render Banner partial with data.
     */
    public function banner(Request $request)
    {
        $width = $request->width;
        $height = $request->height;
        $qty = $request->qty;
        $grommets = $request->grommets;
        $hemming = $request->hemming;

        return view('partials.banner', compact('width', 'height', 'qty', 'grommets', 'hemming'));
    }

    /**
     * Show Banners page with FAQs.
     */
    public function banners()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('banners', ['faqs' => $faqs]);
    }

    /* ---------------------- Quote ---------------------- */

    /**
     * Show the quote page and clear session if `s` is present in request.
     */
    public function quote(Request $request)
    {
        if ($request->has('s')) {
            Session::flush();
        }
        return view('quote');
    }

    /**
     * Store quote information and send an email.
     */
    public function quoteStore(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'design' => 'required|max:255',
            'design_file' => 'required_if:design,yes|mimes:jpeg,jpg,bmp,png|max:5242880',
            'company' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|min:10',
        ]);

        $leadSave = $request->all();

        // Upload design file if present
        if ($request->hasFile('design_file')) {
            $leadSave['design_file'] = $request->design_file->store('leads');
        }

        // Add product and form content from session
        $leadSave['product'] = Session::get('product');
        $leadSave['content'] = json_encode(Session::get('form_data'), true);

        // Store lead in database
        $lead = Lead::create($leadSave);

        // Send email to admin
        Mail::send('emailers.leadAdmin', ['lead' => $lead], function ($message) use ($lead) {
            $message->from('info@example.com', 'Quote Hub');
            $message->to('info@example.com', 'Quote Hub')
                    ->subject('New Lead Notification');
        });

        // Redirect based on result
        if (!is_null($lead)) {
            return redirect()->route('success');
        } else {
            return back()->with("failed", "Something went wrong. Please try again later.");
        }
    }

    /**
     * Show the success page after quote submission.
     */
    public function success()
    {
        return view('success');
    }

    /* ---------------------- Contact Us ---------------------- */

    /**
     * Show the contact us page with FAQs.
     */
    public function contactUs()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('contact-us', ['faqs' => $faqs]);
    }

    /**
     * Store contact form feedback and notify admin via email.
     */
    public function contactUsStore(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
        ]);

        // Prepare data
        $dataArray = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];

        // Save feedback to database
        $feedback = Feedback::create($dataArray);

        // Send email to admin
        if (!is_null($feedback)) {
            Mail::send('emailers.contactAdmin', ['contact' => $feedback], function ($message) use ($feedback) {
                $message->from('info@example.com', 'Quote Hub');
                $message->to('info@example.com', 'Quote Hub')
                        ->subject('New Contact Form Submission on Website');
            });

            return back()->with("success", "Thank you for your feedback.");
        } else {
            return back()->with("failed", "Something went wrong. Please try again later.");
        }
    }

    /* ---------------------- FAQs ---------------------- */

    /**
     * Show the FAQ page.
     */
    public function faq()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('faq', ['faqs' => $faqs]);
    }
}
