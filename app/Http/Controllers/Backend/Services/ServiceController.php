<?php

namespace App\Http\Controllers\backend\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\Service;
use Image;

class ServiceController extends Controller
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
        $this->module_title = 'Services';

        // module name
        $this->module_name = 'services';

        // directory path of the module
        $this->module_path = 'services';

        // module icon
        $this->module_icon = 'fas fas fa-users';

        // module model name, path
        $this->module_model = "App\Models\Service";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view_services');

        $services = Service::all();
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add_services');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view('backend.services.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('add_services');

        $module_action = 'store';
        $request->validate([
            "solution_title"   => "required|unique:" . $this->module_model . ",solution_title",
            "solution_image"   => "required",
            "solution_summary" => "required|unique:" . $this->module_model . ",solution_summary",
            "banner_text"      => "nullable|unique:" . $this->module_model . ",banner_text",
            "banner"           => "nullable",
            "title"            => "nullable|unique:" . $this->module_model . ",title"
        ]);

        DB::beginTransaction();
        try {
            $services  = new $this->module_model();

            $services->banner_text     = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $photo = $request->file('banner');
                $filenameToStore= time() . '.' . $photo->getClientOriginalExtension();
                $location = $request->file('banner')->storeAs('uploads/services/banner', $filenameToStore);
                Image::make($photo)->resize(1920, 1080)->save($location);
                $banner_url = $location;
                $services->banner = $banner_url;

            }

            $solution_image_url = '';
            if ($request->solution_image) {
                $photo = $request->file('solution_image');
                $filenameToStore = time() . '.' . $photo->getClientOriginalExtension();
                $location = $request->file('solution_image')->storeAs('uploads/services/solution_image', $filenameToStore);
                Image::make($photo)->resize(1280,1280)->save($location);
                $services->solution_image = $location;
            }

            $services->title       = $request->title;
            $services->solution_title  = $request->solution_title;
            $services->solution_summary  = $request->solution_summary;

            $services->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $services->id);
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
       
        $this->authorize('show_services');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'show';

        $service = Service::find($id);

        return view('backend.services.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('edit_services');

        $this->authorize('edit_services');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $service = Service::find($id);

        return view('backend.services.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('edit_services');

        $module_action = 'update';
        $request->validate([
            "solution_title"   => "required|unique:" . $this->module_model . ",solution_title,"  . $id . ',id',
            "solution_image"   => "nullable",
            "solution_summary" => "required|unique:" . $this->module_model . ",solution_summary,"  . $id . ',id',
            "banner_text"      => "nullable|unique:" . $this->module_model . ",banner_text," . $id . ',id',
            "banner"           => "nullable",
            "title"            => "nullable|unique:" . $this->module_model . ",title,"  . $id . ',id',
        ]);

        DB::beginTransaction();
        try {
            $services  = Service::find($id);

            $services->banner_text     = $request->banner_text;

            $banner_url = '';
            if ($request->banner) {
                $photo = $request->file('banner');
                $filename= time() . '.' . $photo->getClientOriginalExtension();
                $location = $request->file('banner')->storeAs('uploads/services/banner', $filename);
                Image::make($photo)->resize(1920, 1080)->save($location);
                $banner_url = $location;
                $services->banner = $banner_url;

            }

            $solution_image_url = '';
            if ($request->solution_image) {
                $photo = $request->file('solution_image');
                $filenameToStore = time() . '.' . $photo->getClientOriginalExtension();
                $location = $request->file('solution_image')->storeAs('uploads/services/solution_image', $filenameToStore);
                Image::make($photo)->resize(1280,1280)->save($location);
                $services->solution_image = $location;
            }

            $services->title            = $request->title;
            $services->solution_title   = $request->solution_title;
            $services->solution_summary = $request->solution_summary;

            $services->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $services->id);
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
        $this->authorize('delete_services');

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
