<?php

namespace App\Http\Controllers\Resource;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Storage;
use DB;

class FeedbackResource extends Controller
{
    /**
     * Apply middleware to restrict actions in demo environment.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of all feedbacks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch feedbacks ordered by most recent first
        $feedback = Feedback::orderBy('created_at', 'desc')->get();

        // Return the feedback index view with data
        return view('admin.feedback.index', compact('feedback'));
    }

    /**
     * Show the form for creating a new feedback.
     * (Currently not used or implemented)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // You may implement this if manual feedback creation is needed
    }

    /**
     * Store a newly created feedback in storage.
     * (Currently not used or implemented)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add validation and storing logic here if needed in the future
    }

    /**
     * Display the specified feedback.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // Find feedback by ID or fail
            $feedback = Feedback::findOrFail($id);

            // Show detailed feedback view
            return view('admin.feedback.details', compact('feedback'));
        } catch (ModelNotFoundException $e) {
            // Return the exception object (you can customize this for better UX)
            return $e;
        }
    }

    /**
     * Show the form for editing the specified feedback.
     * (Currently not used or implemented)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Implement if feedback needs to be edited
    }

    /**
     * Update the specified feedback in storage.
     * (Currently not used or implemented)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Add logic if feedback editing is enabled
    }

    /**
     * Remove the specified feedback from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Attempt to delete feedback by ID
            Feedback::find($id)->delete();

            return back()->with('message', 'Feedback deleted successfully');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Feedback Not Found');
        }
    }
}
