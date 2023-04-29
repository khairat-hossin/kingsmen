<?php

namespace App\Http\Controllers\Backend\Investments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\PrivateInvestment;

class PrivateInvestmentController extends Controller
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
        $this->module_title = 'private-investments';

        // module name
        $this->module_name = 'private-investments';

        // directory path of the module
        $this->module_path = 'private-investments';

        // module icon
        $this->module_icon = 'fas fa-hand-holding-usd';

        // module model name, path
        $this->module_model = "App\Models\PrivateInvestment";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investments= DB::table('private_investments')->select('*')->get();
        return view('backend.private-investments.index', compact('investments'));
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

        return view('backend.private-investments.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PrivateInvestment $privateInvestment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrivateInvestment $privateInvestment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrivateInvestment $privateInvestment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrivateInvestment $privateInvestment)
    {
        //
    }
}
