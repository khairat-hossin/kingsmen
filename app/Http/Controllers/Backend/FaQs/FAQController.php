<?php

namespace App\Http\Controllers\Backend\FaQs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\Faq;

class FAQController extends Controller
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
        $this->module_title = 'FAQs';

        // module name
        $this->module_name = 'faqs';

        // directory path of the module
        $this->module_path = 'faqs';

        // module icon
        $this->module_icon = 'fas fa-question-circle';

        // module model name, path
        $this->module_model = "App\Models\Faq";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $this->authorize('view_faqs');
       $faqs= Faq::all();

       return view('backend.faqs.index', compact('faqs'));
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

        return view('backend.faqs.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('add_faqs');

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
            $faqs  = new $this->module_model();

            $faqs->question     = $request->question;
            $faqs->answer       = $request->answer;
            $faqs->banner_text  = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'faqs/banner');
                $faqs->banner = $banner_url;
            }

            $video_url = '';
            if ($request->video) {
                $video_url = uploadFileToPublic($request->file('video'), 'faqs/video');
                $faqs->video = $video_url;
            }

            $faqs->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $faqs->id);
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
        $this->authorize('edit_faqs');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $faq = Faq::find($id);

        return view('backend.crowdfundings.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('add_faqs');

        $module_action = 'update';
        $request->validate([
            "question"         => "required|unique:" . $this->module_model . ",question," . $id . ',id',
            "answer"           => "required|unique:" . $this->module_model . ",answer,"  . $id . ',id',
            "banner"           => "nullable",
            "banner_text"      => "nullable",
            "video"            => "nullable"
        ]);

        DB::beginTransaction();
        try {
            $faqs  = Faq::find($id);

            $faqs->question     = $request->question;
            $faqs->answer       = $request->answer;
            $faqs->banner_text  = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'faqs/banner');
                $faqs->banner = $banner_url;
            }

            $video_url = '';
            if ($request->video) {
                $video_url = uploadFileToPublic($request->file('video'), 'faqs/video');
                $faqs->video = $video_url;
            }

            $faqs->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $faqs->id);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete_faqs');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);


        $$module_name_singular->delete();

        flash(icon().' '.Str::singular($module_title)." Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }
}
