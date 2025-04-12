<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use Auth;
use Exception;
use \Carbon\Carbon;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Faq;
use App\Models\Lead;

class AdminController extends Controller
{
    /**
     * Constructor to apply admin middleware.
     * Ensures only authenticated admin users can access these routes.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display the admin dashboard with key statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // Count leads by product type
        $dash1 = Lead::where('product', 'Coroplast Signs')->count();
        $dash2 = Lead::where('product', 'Banners')->count();
        
        // Count total feedbacks and FAQs
        $dash3 = Feedback::count();
        $dash4 = Faq::count();

        // Get the 5 most recent leads
        $leads = Lead::orderBy('id', 'desc')->take(5)->get();

        // Return the dashboard view with data
        return view('admin.dashboard', compact('dash1', 'dash2', 'dash3', 'dash4', 'leads'));
    }

    /**
     * Show the admin profile view.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('admin.account.profile');
    }

    /**
     * Update the admin profile data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile_update(Request $request)
    {
        // Validate input fields
        $this->validate($request, [
            'name' => 'required|max:255',
            'picture' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
            'about' => 'required',
            'video' => 'required',
        ]);

        try {
            // Get currently authenticated admin
            $admin = Auth::guard('admin')->user();
            
            // Update basic profile data
            $admin->name = $request->name;
            $admin->email = $request->email;

            // If a profile picture is uploaded, store it
            if ($request->hasFile('picture')) {
                $admin->picture = $request->picture->store('admin/profile');
            }

            $admin->save();

            return redirect()->back()->with('flash_success', 'Profile Updated');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Something Went Wrong!');
        }
    }

    /**
     * Show the change password form for the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('admin.account.change-password');
    }

    /**
     * Update the admin's password after verifying the old password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function password_update(Request $request)
    {
        // Validate password fields
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        try {
            // Get the current admin
            $Admin = Admin::find(Auth::guard('admin')->user()->id);

            // Verify the old password before updating
            if (password_verify($request->old_password, $Admin->password)) {
                $Admin->password = bcrypt($request->password);
                $Admin->save();

                return redirect()->back()->with('flash_success', 'Password Updated');
            } else {
                return back()->with('flash_error', 'Old Password is Incorrect');
            }
        } catch (Exception $e) {
            return back()->with('flash_error', 'Something Went Wrong!');
        }
    }
}
