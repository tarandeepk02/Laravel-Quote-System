<?php

namespace App\Http\Controllers\Resource;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Exception;
use Storage;
use DB;

class SettingResource extends Controller
{ 
    /**
     * Apply middleware to prevent deletion in demo mode.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display the settings form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Assume there's only one settings row (ID = 1)
        $setting = Setting::findOrFail(1);		
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * Not used: Display create form.
     */
    public function create()
    {
        //
    }

    /**
     * Not used: Store new settings.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Not used: Show a specific setting.
     */
    public function show($id)
    {
        //
    }

    /**
     * Not used: Display edit form.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the application settings.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $this->validate($request, [
            'logo' => 'nullable|mimes:jpeg,jpg,bmp,png|max:5242880',
            'stitle' => 'required|max:255',
            'metakey' => 'required',
            'metadesc' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
        ]);

        try {
            $setting = Setting::findOrFail($id);

            // Handle logo file upload if present
            if ($request->hasFile('logo')) {
                // Delete the old logo if it exists
                if ($setting->logo) {
                    Storage::delete($setting->logo);
                }

                // Store the new logo
                $setting->logo = $request->file('logo')->store('logos');
            }

            // Update settings fields
            $setting->fill($request->only([
                'stitle', 'metakey', 'metadesc', 'address', 'contact', 'email', 'website',
                'facebook', 'twitter', 'linkedin'
            ]));

            $setting->save();

            return redirect()->route('admin.setting.index')->with('flash_success', 'Settings Updated Successfully');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('flash_error', 'Settings Not Found');
        } catch (Exception $e) {
            return redirect()->back()->with('flash_error', 'An error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Not used: Remove settings.
     */
    public function destroy($id)
    {
        //
    }
}
