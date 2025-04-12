<?php

namespace App\Http\Controllers\Resource;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Storage;
use DB;

class FaqResource extends Controller
{
    /**
     * FaqResource constructor.
     * Apply middleware to prevent deletion in demo mode.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the FAQ resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all FAQs ordered by latest creation
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new FAQ.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created FAQ in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $this->validate($request, [
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        try {
            // Create the FAQ
            $faq = Faq::create($request->all());
            return back()->with('flash_success', 'FAQ Saved Successfully');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Something went wrong. Please try again later');
        }
    }

    /**
     * Display the specified FAQ.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // Retrieve the FAQ by ID
            $faq = Faq::findOrFail($id);
            return view('admin.faq.faq-details', compact('faq'));
        } catch (ModelNotFoundException $e) {
            // Return error if FAQ not found
            return $e;
        }
    }

    /**
     * Show the form for editing the specified FAQ.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            // Retrieve the FAQ for editing
            $faq = Faq::findOrFail($id);
            return view('admin.faq.edit', compact('faq'));
        } catch (ModelNotFoundException $e) {
            return $e;
        }
    }

    /**
     * Update the specified FAQ in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate updated data
        $this->validate($request, [
            'question' => 'required|max:255',
            'answer' => 'required'
        ]);

        try {
            // Find and update the FAQ
            $faq = Faq::findOrFail($id);
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            return redirect()->route('admin.faq.index')->with('flash_success', 'Faq Updated Successfully');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Faq Not Found');
        }
    }

    /**
     * Remove the specified FAQ from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Find and delete the FAQ
            Faq::find($id)->delete();
            return back()->with('message', 'Faq deleted successfully');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Faq Not Found');
        }
    }
}
