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
            "project_logo"                    => "required",
            "project_name"                    => "required|unique:" . $this->module_model . ",project_name",
            "address"                         => "required",
            "project_location"                => "required",
            "registered_company_name"         => "required|unique:" . $this->module_model . ",registered_company_name",
            "comapany_tax_number"             => "required|unique:" . $this->module_model . ",comapany_tax_number",
            "project_type"                    => "required",
            "accepted_currency"               => "required",
            "starting_date"                   => "required",
            "accepted_currency"               => "required",
            "delivery_date"                   => "required",
            "area_starting_per_sqm"           => "required",
            "price_starting_per_sqm"          => "required",
            "land_price_starting"             => "required",

            "home_page_banner"                => "required",
            "home_page_banner_text"           => "required",
            "home_page_header_title"          => "required",
            "home_page_header_paragraph"      => "required",
            "home_page_footer_title"          => "required",
            "home_page_footer_paragraph"      => "required",
            "project_timeline"                => "required",
            "project_management_companies"    => "required",
            "home_page_photos_gallery"    => "required",

            "qna_page_banner"                 => "required",
            "qna_page_banner_text"            => "required",
            "qna_page_header_title"           => "required",
            "qna_page_header_paragraph"       => "required",
            "qna_page_footer_title"           => "required",
            "qna_page_footer_paragraph"       => "required",

            "buy_home_page_banner"            => "required",
            "buy_home_page_banner_text"       => "required",
            "buy_home_page_header_title"      => "required",
            "buy_home_page_header_paragraph"  => "required",
            "buy_home_page_footer_title"      => "required",
            "buy_home_page_footer_paragraph"  => "required",

            "buy_land_page_banner"            => "required",
            "buy_land_page_banner_text"       => "required",
            "buy_land_page_header_title"      => "required",
            "buy_land_page_header_paragraph"  => "required",
            "buy_land_page_footer_title"      => "required",
            "buy_land_page_footer_paragraph"  => "required",

            "amenities_page_banner"           => "required",
            "amenities_page_banner_text"      => "required",
            "amenities_page_header_title"     => "required",
            "amenities_page_header_paragraph" => "required",
            "amenities_page_footer_title"     => "required",
            "amenities_page_footer_paragraph" => "required",

            "financing_page_banner"           => "required",
            "financing_page_banner_text"      => "required",
            "financing_page_header_title"     => "required",
            "financing_page_header_paragraph" => "required",
            "financing_page_footer_title"     => "required",
            "financing_page_footer_paragraph" => "required",

            "who_page_banner"                 => "required",
            "who_page_banner_text"            => "required",
            "who_page_header_title"           => "required",
            "who_page_header_paragraph"       => "required",
            "who_page_footer_title"           => "required",
            "who_page_footer_paragraph"       => "required",

            "contact_page_banner"                 => "required",
            "contact_page_banner_text"            => "required",
            "contact_page_header_title"           => "required",
            "contact_page_header_paragraph"       => "required",
            "contact_page_footer_title"           => "required",
            "contact_page_footer_paragraph"       => "required",

            "kingsmen_details"                => "required",
            "phone_number"                    => "required",
            "project_address"                 => "required",
            "email"                           => "required|email",

            
            "project_brochure"                => "required",
            "project_elevations"              => "required",
            "construction_rules"              => "required",
            "other"                           => "nullable",
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
            $project->address                 = $request->address;
            $project->project_location        = $request->project_location;
            $project->registered_company_name = $request->registered_company_name;
            $project->comapany_tax_number     = $request->comapany_tax_number;
            $project->project_type            = $request->project_type;
            $project->accepted_currency       = $request->accepted_currency;
            $project->starting_date           = date("Y-m-d", strtotime($request->starting_date));
            $project->delivery_date           = date("Y-m-d", strtotime($request->delivery_date));
            $project->area_starting_per_sqm   = $request->area_starting_per_sqm;
            $project->price_starting_per_sqm  = $request->price_starting_per_sqm;
            $project->land_price_starting     = $request->land_price_starting;

            $home_page_banner = '';
            if ($request->home_page_banner) {
                $home_page_banner = uploadFileToPublic($request->file('home_page_banner'), 'projects/home_page_banner');
            }
            $project->home_page_banner             = $home_page_banner;
            $project->home_page_banner_text        = $request->home_page_banner_text;
            $project->home_page_header_title       = $request->home_page_header_title;
            $project->home_page_header_paragraph   = $request->home_page_header_paragraph;
            $project->home_page_footer_title       = $request->home_page_footer_title;
            $project->home_page_footer_paragraph   = $request->home_page_footer_paragraph;
            $project->project_timeline             = $request->project_timeline;
            $project->project_management_companies = $request->project_management_companies;
            $home_page_photos_gallery = '';
            if ($request->home_page_photos_gallery) {
                $home_page_photos_gallery = uploadFileToPublic($request->file('home_page_photos_gallery'), 'projects/home_page_photos_gallery');
            }


            $qna_page_banner = '';
            if ($request->qna_page_banner) {
                $qna_page_banner = uploadFileToPublic($request->file('qna_page_banner'), 'projects/qna_page_banner');
            }
            $project->qna_page_banner           = $qna_page_banner;
            $project->qna_page_banner_text      = $request->qna_page_banner_text;
            $project->qna_page_header_title     = $request->qna_page_header_title;
            $project->qna_page_header_paragraph = $request->qna_page_header_paragraph;
            $project->qna_page_footer_title     = $request->qna_page_footer_title;
            $project->qna_page_footer_paragraph = $request->qna_page_footer_paragraph;

            $buy_home_page_banner = '';
            if ($request->buy_home_page_banner) {
                $buy_home_page_banner = uploadFileToPublic($request->file('buy_home_page_banner'), 'projects/buy_home_page_banner');
            }
            $project->buy_home_page_banner           = $buy_home_page_banner;
            $project->buy_home_page_banner_text      = $request->buy_home_page_banner_text;
            $project->buy_home_page_header_title     = $request->buy_home_page_header_title;
            $project->buy_home_page_header_paragraph = $request->buy_home_page_header_paragraph;
            $project->buy_home_page_footer_title     = $request->buy_home_page_footer_title;
            $project->buy_home_page_footer_paragraph = $request->buy_home_page_footer_paragraph;

            $buy_land_page_banner = '';
            if ($request->buy_land_page_banner) {
                $buy_land_page_banner = uploadFileToPublic($request->file('buy_land_page_banner'), 'projects/buy_land_page_banner');
            }
            $project->buy_land_page_banner           = $buy_land_page_banner;
            $project->buy_land_page_banner_text      = $request->buy_land_page_banner_text;
            $project->buy_land_page_header_title     = $request->buy_land_page_header_title;
            $project->buy_land_page_header_paragraph = $request->buy_land_page_header_paragraph;
            $project->buy_land_page_footer_title     = $request->buy_land_page_footer_title;
            $project->buy_land_page_footer_paragraph = $request->buy_land_page_footer_paragraph;

            $amenities_page_banner = '';
            if ($request->amenities_page_banner) {
                $amenities_page_banner = uploadFileToPublic($request->file('amenities_page_banner'), 'projects/amenities_page_banner');
            }
            $project->amenities_page_banner           = $amenities_page_banner;
            $project->amenities_page_banner_text      = $request->amenities_page_banner_text;
            $project->amenities_page_header_title     = $request->amenities_page_header_title;
            $project->amenities_page_header_paragraph = $request->amenities_page_header_paragraph;
            $project->amenities_page_footer_title     = $request->amenities_page_footer_title;
            $project->amenities_page_footer_paragraph = $request->amenities_page_footer_paragraph;

            $financing_page_banner = '';
            if ($request->financing_page_banner) {
                $financing_page_banner = uploadFileToPublic($request->file('financing_page_banner'), 'projects/financing_page_banner');
            }
            $project->financing_page_banner           = $financing_page_banner;
            $project->financing_page_banner_text      = $request->financing_page_banner_text;
            $project->financing_page_header_title     = $request->financing_page_header_title;
            $project->financing_page_header_paragraph = $request->financing_page_header_paragraph;
            $project->financing_page_footer_title     = $request->financing_page_footer_title;
            $project->financing_page_footer_paragraph = $request->financing_page_footer_paragraph;

            $who_page_banner = '';
            if ($request->who_page_banner) {
                $who_page_banner = uploadFileToPublic($request->file('who_page_banner'), 'projects/who_page_banner');
            }
            $project->who_page_banner           = $who_page_banner;
            $project->who_page_banner_text      = $request->who_page_banner_text;
            $project->who_page_header_title     = $request->who_page_header_title;
            $project->who_page_header_paragraph = $request->who_page_header_paragraph;
            $project->who_page_footer_title     = $request->who_page_footer_title;
            $project->who_page_footer_paragraph = $request->who_page_footer_paragraph;

            $contact_page_banner = '';
            if ($request->contact_page_banner) {
                $contact_page_banner = uploadFileToPublic($request->file('contact_page_banner'), 'projects/contact_page_banner');
            }
            $project->contact_page_banner           = $contact_page_banner;
            $project->contact_page_banner_text      = $request->contact_page_banner_text;
            $project->contact_page_header_title     = $request->contact_page_header_title;
            $project->contact_page_header_paragraph = $request->contact_page_header_paragraph;
            $project->contact_page_footer_title     = $request->contact_page_footer_title;
            $project->contact_page_footer_paragraph = $request->contact_page_footer_paragraph;

            $project->kingsmen_details = $request->kingsmen_details;
            $project->phone_number     = $request->phone_number;
            $project->project_address  = $request->project_address;
            $project->email            = $request->email;

            $project_brochure = '';
            $project_elevations = '';
            $construction_rules = '';
            $other = '';
            if ($request->project_brochure) {
                $project_brochure = uploadFileToPublic($request->file('project_brochure'), 'projects/project_brochure');
            }

            if ($request->project_elevations) {
                $project_elevations = uploadFileToPublic($request->file('project_elevations'), 'projects/project_elevations');
            }

            if ($request->construction_rules) {
                $construction_rules = uploadFileToPublic($request->file('construction_rules'), 'projects/construction_rules');
            }

            if ($request->other) {
                $other = uploadFileToPublic($request->file('other'), 'projects/other');
            }

            $project->project_brochure = $project_brochure;
            $project->project_elevations     = $project_elevations;
            $project->construction_rules  = $construction_rules;
            $project->other            = $other;

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
