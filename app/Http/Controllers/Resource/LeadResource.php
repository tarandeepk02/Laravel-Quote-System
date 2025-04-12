<?php

namespace App\Http\Controllers\Resource;

use App\Models\Lead;
use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Storage;
use DB;

class LeadResource extends Controller
{
    /**
     * Constructor to apply middleware.
     * 'demo' middleware restricts destructive actions in demo environments.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of all leads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all leads ordered by newest first
        $leads = Lead::orderBy('created_at', 'desc')->get();
        return view('admin.lead.index', compact('leads'));
    }

    /**
     * Show the form for creating a new lead.
     * Currently not implemented.
     */
    public function create()
    {
        // No create form needed for leads at the moment
    }

    /**
     * Store a newly created lead in the database.
     * Currently not implemented.
     */
    public function store(Request $request)
    {
        // Lead creation via admin panel not implemented
    }

    /**
     * Display the specified lead details.
     *
     * @param  int  $id  Lead ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // Fetch the lead or fail
            $lead = Lead::findOrFail($id);

            // Decode JSON content (stored as string) into array
            $productInfo = json_decode($lead->content, true);

            return view('admin.lead.details', compact('lead', 'productInfo'));
        } catch (ModelNotFoundException $e) {
            // If lead not found, return exception (or log it in production)
            return $e;
        }
    }

    /**
     * Show the form for editing a lead.
     * Currently not implemented.
     */
    public function edit($id)
    {
        // Edit functionality not implemented for leads
    }

    /**
     * Update the specified lead in the database.
     * Currently not implemented.
     */
    public function update(Request $request, $id)
    {
        // Lead updates not supported in admin panel
    }

    /**
     * Remove the specified lead from storage.
     *
     * @param  int  $id  Lead ID
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Delete the lead by ID or throw exception
            $lead = Lead::findOrFail($id);
            $lead->delete();

            return back()->with('message', 'Lead deleted successfully');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Lead Not Found');
        }
    }
}
