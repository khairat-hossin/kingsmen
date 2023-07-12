<?php

namespace App\Http\Controllers\backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    use Authorizable;

    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'About Us';

        // module name
        $this->module_name = 'about-us';

        // directory path of the module
        $this->module_path = 'about-us';

        // module icon
        $this->module_icon = 'fas fas fa-info-circle';

        // module model name, path
        $this->module_model = "App\Models\AboutUs";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_us = AboutUs::all();
        return view('backend.about_us.index', compact('about_us'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add_faqs');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view('backend.about_us.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('add_about_us');

        $module_action = 'store';
        $request->validate([
            "question"         => "required|unique:" . $this->module_model . ",question",
            "answer"           => "required|unique:" . $this->module_model . ",answer",
            "banner"           => "nullable",
            "banner_text"      => "nullable",
        ]);

        DB::beginTransaction();
        try {
            $about_us  = new $this->module_model();

            $about_us->question     = $request->question;
            $about_us->answer       = $request->answer;
            $about_us->banner_text  = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'about_us/banner');
                $about_us->banner = $banner_url;
            }


            $about_us->save();

            flash(icon() . ' ' . "About Us" . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $about_us->id);
            DB::commit();
            return redirect("admin/$this->module_name");

        } catch (\Throwable $th) {
            DB::rollBack();
            $msg = $th->getMessage();
            flash(icon() . ' ' . Str::singular($this->module_title) . " Creation Failed! $msg")->error()->important();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('show_about_us');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        // $module_name_singular = 'about_us';

        $module_action = 'Show';

        $about_us = AboutUs::find($id);
        return view('backend.about_us.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_action', 'about_us'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('edit_about_us');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        // $module_name_singular = 'about_us';

        $module_action = 'Edit';

        $about_us = AboutUs::find($id);
        return view('backend.about_us.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_action', 'about_us'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->about_us_id;

        $this->authorize('add_edit_us');
        $module_action = 'update';
        $request->validate([
            "question"         => "required|unique:about_us,question," . $id . ',id',
            "answer"           => "required|unique:about_us,answer,"  . $id . ',id',
            "banner"           => "nullable",
            "banner_text"      => "nullable",
        ]);

        DB::beginTransaction();
        try {
            $about_us  = AboutUs::find($id);

            $about_us->question     = $request->question;
            $about_us->answer       = $request->answer;
            $about_us->banner_text  = $request->banner_text;

            $banner_url = '';
             // Delete previous files on update
             if($request->hasFile('banner')){
                if ($oldFile = $about_us->banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                // Set new file
                $banner_url = uploadFileToPublic($request->file('banner'), 'about_us/banner');
                $about_us->banner = $banner_url;
            }


            $about_us->save();

            flash(icon() . ' ' . Str::singular('About Us') . " Updated Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $about_us->id);
            DB::commit();
            return redirect("admin/$this->module_name");

        } catch (\Throwable $th) {
            DB::rollBack();
            $msg = $th->getMessage();
            flash(icon() . ' ' . Str::singular('About Us') . " Update Failed! $msg")->error()->important();
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete_about_us');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $filePath = public_path($$module_name_singular->banner);
        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
        }

        $$module_name_singular->delete();

        flash(icon().' '.('About Us')." Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }
}
