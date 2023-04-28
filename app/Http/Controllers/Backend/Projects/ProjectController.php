<?php

namespace App\Http\Controllers\Backend\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProjectController extends Controller {
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public $module_name_singular;

    public function __construct() {
        // Page Title
        $this->module_title = 'Projects';

        // module name
        $this->module_name = 'projects';

        // directory path of the module
        $this->module_path = 'projects';

        // module icon
        $this->module_icon = 'fa-solid fa-tree-city';

        // module model name, path
        $this->module_model = "App\Models\Project";

        // module name singular
        $this->module_name_singular = Str::singular($this->module_name);
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $projects = DB::table('projects')->select('*')->get();
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $module_title         = $this->module_title;
        $module_name          = $this->module_name;
        $module_path          = $this->module_path;
        $module_icon          = $this->module_icon;
        $module_model         = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action        = 'Create';
        Log::info(label_case($module_title . ' ' . $module_action) . ' | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return view('backend.projects.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $module_action = 'store';
        $request->validate([
            "project_logo"            => "required",
            "project_name"            => "required|unique:" . $this->module_model . ",project_name",
            "project_address"         => "required",
            "project_location"        => "required",
            "registered_company_name" => "required|unique:" . $this->module_model . ",registered_company_name",
            "comapany_tax_number"     => "required|unique:" . $this->module_model . ",comapany_tax_number",
            "project_type"            => "required",
            "accepted_currency"       => "required",
        ]);

        DB::beginTransaction();
        try {
            $project  = new $this->module_model();
            $logo_url = '';
            if ($request->project_logo) {
                $logo_url = uploadFileToPublic($request->file('project_logo'), 'projects/logo');
            }
            $project->project_logo            = $logo_url;
            $project->project_name            = $request->project_name;
            $project->project_address         = $request->project_address;
            $project->project_location        = $request->project_location;
            $project->registered_company_name = $request->registered_company_name;
            $project->comapany_tax_number     = $request->comapany_tax_number;
            $project->project_type            = $request->project_type;
            $project->accepted_currency       = $request->accepted_currency;

            $project->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $project->id);
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
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
