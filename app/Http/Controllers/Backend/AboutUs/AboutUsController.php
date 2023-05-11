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
            "video"            => "nullable"
        ]);

        DB::beginTransaction();
        try {
            $about_us  = new $this->module_model();

            $about_us->question     = $request->question;
            $about_us->answer       = $request->answer;
            $about_us->banner_text  = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'faqs/banner');
                $about_us->banner = $banner_url;
            }

            $video_url = '';
            if ($request->video) {
                $video_url = uploadFileToPublic($request->file('video'), 'faqs/video');
                $about_us->video = $video_url;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
