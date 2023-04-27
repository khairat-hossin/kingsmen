<?php

namespace App\Http\Controllers\Backend\Crowdfundings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\Crowdfunding;

class CrowdfundingController extends Controller
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
        $this->module_title = 'Crowdfundings';

        // module name
        $this->module_name = 'crowdfundings';

        // directory path of the module
        $this->module_path = 'crowdfundings';

        // module icon
        $this->module_icon = 'fas fa-donate';

        // module model name, path
        $this->module_model = "App\Models\Crowdfunding";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crowdfundings= DB::table('crowdfundings')->select('*')->get();
        return view('backend.crowdfundings.index', compact('crowdfundings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view('backend.crowdfundings.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $validatedData = $request->validate([
            'project_name' => 'required|unique:'.$module_model.',project_name',
            'project_location' => 'nullable:'.$module_model.',project_location',
            'registered_company_name' => 'nullable:'.$module_model.',registered_company_name',
            'company_tax_number' => 'nullable:'.$module_model.',company_tax_number',
        ]);

        $crowdfunding = new Crowdfunding([
            'project_name' => $validatedData['project_name'],
            'project_location' => $validatedData['project_location'],
            'registered_company_name' => $validatedData['registered_company_name'],
            'company_tax_number' => $validatedData['company_tax_number']
        ]);

        $crowdfunding->save();


        flash(icon().' '.Str::singular($module_title)."' Created.")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
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
