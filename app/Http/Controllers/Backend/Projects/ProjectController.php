<?php

namespace App\Http\Controllers\Backend\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\Project;
use Image;

use Illuminate\Support\Facades\Storage;


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

        $this->authorize('view_projects');

        $projects = DB::table('projects')->select('*')->get();
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

        $this->authorize('create_projects');

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
            "slug"                            => "nullable",
            "address"                         => "required",
            "project_location"                => "required",
            "registered_company_name"         => "required|unique:" . $this->module_model . ",registered_company_name",
            "comapany_tax_number"             => "required|unique:" . $this->module_model . ",comapany_tax_number",
            "project_type"                    => "nullable",
            "project_duration_in_years"       => "nullable",
            "accepted_currency"               => "nullable",
            "starting_date"                   => "nullable",
            "accepted_currency"               => "nullable",
            "delivery_date"                   => "nullable",
            "area_starting_per_sqm"           => "nullable",
            "price_starting_per_sqm"          => "nullable",
            "land_price_starting"             => "nullable",

            "home_page_banner"                => "nullable|mimes:jpeg,png,jpg,gif",
            "home_page_banner_text"           => "nullable",
            "home_page_header_title"          => "nullable",
            "home_page_header_paragraph"      => "nullable",
            "home_page_footer_title"          => "nullable",
            "home_page_footer_paragraph"      => "nullable",
            "project_timeline"                => "nullable",
            "project_management_companies"    => "nullable",
            "home_page_photos_gallery"        => "nullable",

            "qna_page_banner"                 => "nullable|mimes:jpeg,png,jpg,gif",
            "qna_page_banner_text"            => "nullable",
            "qna_page_header_title"           => "nullable",
            "qna_page_header_paragraph"       => "nullable",
            "qna_page_footer_title"           => "nullable",
            "qna_page_footer_paragraph"       => "nullable",

            "buy_home_page_banner"            => "nullable|mimes:jpeg,png,jpg,gif",
            "buy_home_page_banner_text"       => "nullable",
            "buy_home_page_header_title"      => "nullable",
            "buy_home_page_header_paragraph"  => "nullable",
            "buy_home_page_footer_title"      => "nullable",
            "buy_home_page_footer_paragraph"  => "nullable",

            "buy_land_page_banner"            => "nullable|mimes:jpeg,png,jpg,gif",
            "buy_land_page_banner_text"       => "nullable",
            "buy_land_page_header_title"      => "nullable",
            "buy_land_page_header_paragraph"  => "nullable",
            "buy_land_page_footer_title"      => "nullable",
            "buy_land_page_footer_paragraph"  => "nullable",

            "amenities_page_banner"           => "nullable|mimes:jpeg,png,jpg,gif",
            "amenities_page_banner_text"      => "nullable",
            "amenities_page_header_title"     => "nullable",
            "amenities_page_header_paragraph" => "nullable",
            "amenities_page_footer_title"     => "nullable",
            "amenities_page_footer_paragraph" => "nullable",

            "financing_page_banner"           => "nullable|mimes:jpeg,png,jpg,gif",
            "financing_page_banner_text"      => "nullable",
            "financing_page_header_title"     => "nullable",
            "financing_page_header_paragraph" => "nullable",
            "financing_page_footer_title"     => "nullable",
            "financing_page_footer_paragraph" => "nullable",

            "who_page_banner"                 => "nullable|mimes:jpeg,png,jpg,gif",
            "who_page_banner_text"            => "nullable",
            "who_page_header_title"           => "nullable",
            "who_page_header_paragraph"       => "nullable",
            "who_page_footer_title"           => "nullable",
            "who_page_footer_paragraph"       => "nullable",

            "contact_page_banner"             => "nullable|mimes:jpeg,png,jpg,gif",
            "contact_page_banner_text"        => "nullable",
            "contact_page_header_title"       => "nullable",
            "contact_page_header_paragraph"   => "nullable",
            "contact_page_footer_title"       => "nullable",
            "contact_page_footer_paragraph"   => "nullable",

            "kingsmen_details"                => "nullable",
            "phone_number"                    => "nullable",
            "project_address"                 => "nullable",
            "email"                           => "nullable|email",

            "project_brochure"                => "nullable",
            "project_elevations"              => "nullable",
            "construction_rules"              => "nullable",
            "other"                           => "nullable",

            "land_number"                     => "nullable",
            "land_category"                   => "nullable",
            "land_area"                       => "nullable",
            "land_price_per_sqm"              => "nullable",
            "total_land_price"                => "nullable",
            "interactive_map"                 => "nullable",
            "all_listings_land"               => "nullable|mimes:csv",

            "house_type"                      => "nullable",
            "house_area_per_sqm"              => "nullable",
            "cost_of_construction_per_sqm"    => "nullable",
            "all_listings_house"              => "nullable|mimes:csv",
            "technical_specs"                 => "nullable|mimes:pdf",
            "total_construction_cost"         => "nullable",

            "selling_contract.*"              => "nullable|mimes:pdf",
            "company_papers.*"                  => "nullable|mimes:pdf",
            "project_rules_and_regulation.*"    => "nullable|mimes:pdf",
            "other_files.*"                     => "nullable",

            "project_thumbnail"               => "nullable",
            "title"                           => "nullable",
            "description"                     => "nullable",
            "total_price_with_land"           => "nullable",
            "deposit"                         => "nullable",
            "remainingAmount_as_bankTransfer" => "nullable",
            "full_payment_usdt"               => "nullable",
            "template"                        => "nullable",
        ]);

        DB::beginTransaction();
        try {

            $project  = new $this->module_model();

            $logo_url = '';

            if ($request->project_logo) {
                $logo_url = uploadFileToPublic($request->file('project_logo'), 'projects/logo');
                $project->project_logo   = $logo_url;
            }

            $project->project_name            = $request->project_name;
            $project->slug                    = Str::slug($request->project_name);
            $project->address                 = $request->address;
            $project->project_location        = $request->project_location;
            $project->registered_company_name = $request->registered_company_name;
            $project->comapany_tax_number     = $request->comapany_tax_number;
            $project->project_type            = $request->project_type;
            $project->project_duration_in_years       = $request->project_duration_in_years;
            $project->accepted_currency       = $request->accepted_currency;
            $project->starting_date           = date("Y-m-d", strtotime($request->starting_date));
            $project->delivery_date           = date("Y-m-d", strtotime($request->delivery_date));
            $project->area_starting_per_sqm   = $request->area_starting_per_sqm;
            $project->price_starting_per_sqm  = $request->price_starting_per_sqm;
            $project->land_price_starting     = $request->land_price_starting;
            $project->project_thumbnail       =$request->project_thumbnail;
            $project->title                   =$request->title;
            $project->description             =$request->description;
            $project->total_price_with_land   =$request->total_price_with_land;
            $project->deposit                 =$request->deposit;
            $project->remainingAmount_as_bankTransfer             =$request->remainingAmount_as_bankTransfer;
            $project->full_payment_usdt       =$request->full_payment_usdt;


            // land
            $project->land_number        = $request->land_number;
            $project->land_category      = $request->land_category;
            $project->land_area          = $request->land_area;
            $project->land_price_per_sqm = $request->land_price_per_sqm;
            $project->total_land_price   = $request->total_land_price;
            $project->interactive_map    = $request->interactive_map;
            $all_listings_land           = '';
            if ($request->all_listings_land) {
                $all_listings_land = uploadFileToPublic($request->file('all_listings_land'), 'projects/all_listings_land');
                $project->all_listings_land = $all_listings_land;
            }

            // land
            $project->house_type                   = $request->house_type;
            $project->house_area_per_sqm           = $request->house_area_per_sqm;
            $project->cost_of_construction_per_sqm = $request->cost_of_construction_per_sqm;
            $project->total_construction_cost      = $request->total_construction_cost;
            $all_listings_house                    = '';
            if ($request->all_listings_house) {
                $all_listings_house = uploadFileToPublic($request->file('all_listings_house'), 'projects/all_listings_house');
                $project->all_listings_house = $all_listings_house;
            }

            $technical_specs = '';
            if ($request->technical_specs) {
                $technical_specs = uploadFileToPublic($request->file('technical_specs'), 'projects/technical_specs');
                $project->technical_specs = $technical_specs;
            }

               // Multiple files save to db
               $selling_contract_url = '';
               $selling_contracts = $request->file('selling_contract');
               $filePath = [];

               if($selling_contracts)
               {
                    foreach ($selling_contracts as $selling_contract) {
                        $selling_contract_url = uploadFileToPublic($selling_contract, 'projects/selling_contract');
                        $filePath[] = public_path($selling_contract_url);
                    }
                    $project->selling_contract = json_encode($filePath);
               }

            //    Company papers
               $company_papers_url = [];
               $company_papers = $request->file('company_papers');
               $filePath = [];

               if($company_papers)
               {
                    foreach ($company_papers as $company_paper) {
                        $company_papers_url = uploadFileToPublic($company_paper, 'projects/company_papers');
                        $filePath[] = public_path($company_papers_url);
                    }
                    $project->company_papers = json_encode($filePath);
               }

            //    Project rules and regulations
               $project_rules_and_regulation_url = [];
               $project_rules_and_regulations = $request->file('project_rules_and_regulation');
               $filePath = [];

               if($project_rules_and_regulations)
               {
                    foreach ($project_rules_and_regulations as $project_rules_and_regulation) {
                        $project_rules_and_regulation_url = uploadFileToPublic($project_rules_and_regulation, 'projects/project_rules_and_regulation');
                        $filePath[] = public_path($project_rules_and_regulation_url);
                    }
                    $project->project_rules_and_regulation = json_encode($filePath);
               }

            //    Other Files
               $other_files_url = [];
               $other_files = $request->file('other_files');
               $filePath = [];

               if($other_files)
               {
                    foreach ($other_files as $other_file) {
                        $other_files_url = uploadFileToPublic($other_file, 'projects/other_files');
                        $filePath[] = public_path($other_files_url);
                    }
                    $project->other_files = json_encode($filePath);
               }


            // home page
            $home_page_banner = '';
            if ($request->home_page_banner) {
                $home_page_banner = uploadFileToPublic($request->file('home_page_banner'), 'projects/home_page_banner');
                $project->home_page_banner             = $home_page_banner;
            }

            $project->home_page_banner_text        = $request->home_page_banner_text;
            $project->home_page_header_title       = $request->home_page_header_title;
            $project->home_page_header_paragraph   = $request->home_page_header_paragraph;
            $project->home_page_footer_title       = $request->home_page_footer_title;
            $project->home_page_footer_paragraph   = $request->home_page_footer_paragraph;
            $project->project_timeline             = $request->project_timeline;
            $project->project_management_companies = $request->project_management_companies;


            // Multiple photo resize and put link to db
           $home_page_photos_galleryurl = '';
           $photos_gallery = $request->file('home_page_photos_gallery');
           $path = [];
           if($photos_gallery)
           {
                foreach ($photos_gallery as $photo) {
                    // Resize the image to a specific width and height
                    $resizedImage = Image::make($photo); // ei line tai kaaj korse na, data null

                    $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
                    $resizedImage->resize(560, 320);

                    $resizedImage->save('uploads/projects/home_page_photos_gallery/'.$filename);
                    $path[] = $resizedImage->basePath();
                }
                $project->home_page_photos_gallery = json_encode($path);
           }
           //End Multiple photo resize and put link to db

            $qna_page_banner = '';
            if ($request->qna_page_banner) {
                $qna_page_banner = uploadFileToPublic($request->file('qna_page_banner'), 'projects/qna_page_banner');
                $project->qna_page_banner           = $qna_page_banner;
            }

            $project->qna_page_banner_text      = $request->qna_page_banner_text;
            $project->qna_page_header_title     = $request->qna_page_header_title;
            $project->qna_page_header_paragraph = $request->qna_page_header_paragraph;
            $project->qna_page_footer_title     = $request->qna_page_footer_title;
            $project->qna_page_footer_paragraph = $request->qna_page_footer_paragraph;

            $buy_home_page_banner = '';
            if ($request->buy_home_page_banner) {
                $buy_home_page_banner = uploadFileToPublic($request->file('buy_home_page_banner'), 'projects/buy_home_page_banner');
                $project->buy_home_page_banner           = $buy_home_page_banner;
            }

            $project->buy_home_page_banner_text      = $request->buy_home_page_banner_text;
            $project->buy_home_page_header_title     = $request->buy_home_page_header_title;
            $project->buy_home_page_header_paragraph = $request->buy_home_page_header_paragraph;
            $project->buy_home_page_footer_title     = $request->buy_home_page_footer_title;
            $project->buy_home_page_footer_paragraph = $request->buy_home_page_footer_paragraph;

            $buy_land_page_banner = '';
            if ($request->buy_land_page_banner) {
                $buy_land_page_banner = uploadFileToPublic($request->file('buy_land_page_banner'), 'projects/buy_land_page_banner');
                $project->buy_land_page_banner   = $buy_land_page_banner;
            }

            $project->buy_land_page_banner_text      = $request->buy_land_page_banner_text;
            $project->buy_land_page_header_title     = $request->buy_land_page_header_title;
            $project->buy_land_page_header_paragraph = $request->buy_land_page_header_paragraph;
            $project->buy_land_page_footer_title     = $request->buy_land_page_footer_title;
            $project->buy_land_page_footer_paragraph = $request->buy_land_page_footer_paragraph;

            $amenities_page_banner = '';
            if ($request->amenities_page_banner) {
                $amenities_page_banner = uploadFileToPublic($request->file('amenities_page_banner'), 'projects/amenities_page_banner');
                $project->amenities_page_banner           = $amenities_page_banner;
            }

            $project->amenities_page_banner_text      = $request->amenities_page_banner_text;
            $project->amenities_page_header_title     = $request->amenities_page_header_title;
            $project->amenities_page_header_paragraph = $request->amenities_page_header_paragraph;
            $project->amenities_page_footer_title     = $request->amenities_page_footer_title;
            $project->amenities_page_footer_paragraph = $request->amenities_page_footer_paragraph;

            $financing_page_banner = '';
            if ($request->financing_page_banner) {
                $financing_page_banner = uploadFileToPublic($request->file('financing_page_banner'), 'projects/financing_page_banner');
                $project->financing_page_banner           = $financing_page_banner;
            }

            $project->financing_page_banner_text      = $request->financing_page_banner_text;
            $project->financing_page_header_title     = $request->financing_page_header_title;
            $project->financing_page_header_paragraph = $request->financing_page_header_paragraph;
            $project->financing_page_footer_title     = $request->financing_page_footer_title;
            $project->financing_page_footer_paragraph = $request->financing_page_footer_paragraph;

            $who_page_banner = '';
            if ($request->who_page_banner) {
                $who_page_banner = uploadFileToPublic($request->file('who_page_banner'), 'projects/who_page_banner');
                $project->who_page_banner           = $who_page_banner;
            }

            $project->who_page_banner_text      = $request->who_page_banner_text;
            $project->who_page_header_title     = $request->who_page_header_title;
            $project->who_page_header_paragraph = $request->who_page_header_paragraph;
            $project->who_page_footer_title     = $request->who_page_footer_title;
            $project->who_page_footer_paragraph = $request->who_page_footer_paragraph;

            $contact_page_banner = '';
            if ($request->contact_page_banner) {
                $contact_page_banner = uploadFileToPublic($request->file('contact_page_banner'), 'projects/contact_page_banner');
                $project->contact_page_banner           = $contact_page_banner;
            }

            $project->contact_page_banner_text      = $request->contact_page_banner_text;
            $project->contact_page_header_title     = $request->contact_page_header_title;
            $project->contact_page_header_paragraph = $request->contact_page_header_paragraph;
            $project->contact_page_footer_title     = $request->contact_page_footer_title;
            $project->contact_page_footer_paragraph = $request->contact_page_footer_paragraph;

            $project->kingsmen_details = $request->kingsmen_details;
            $project->phone_number     = $request->phone_number;
            $project->project_address  = $request->project_address;
            $project->email            = $request->email;

            $project_brochure   = '';
            $project_elevations = '';
            $construction_rules = '';
            $other              = '';

            if ($request->project_brochure) {
                $project_brochure = uploadFileToPublic($request->file('project_brochure'), 'projects/project_brochure');
                $project->project_brochure   = $project_brochure;
            }

            if ($request->project_elevations) {
                $project_elevations = uploadFileToPublic($request->file('project_elevations'), 'projects/project_elevations');
                $project->project_elevations = $project_elevations;
            }

            if ($request->construction_rules) {
                $construction_rules = uploadFileToPublic($request->file('construction_rules'), 'projects/construction_rules');
                $project->construction_rules = $construction_rules;
            }

            if ($request->other) {
                $other = uploadFileToPublic($request->file('other'), 'projects/other');
                $project->other    = $other;
            }

            $project->template = $request->template;

            $project->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $project->id);
            DB::commit();
            return redirect("admin/$this->module_name");

        } catch (\Throwable $th) {
            DB::rollBack();
            $msg = $th->getMessage();
            flash(icon() . ' ' . Str::singular($this->module_title) . " Create Failed! $msg")->error()->important();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {

        $this->authorize('view_projects');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $project = Project::find($id);

        return view('backend.projects.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

        $this->authorize('edit_projects');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $project = Project::find($id);

        return view('backend.projects.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

        $module_action = 'update';

        $request->validate([
            "project_logo"                    => "nullable",
            "project_name"                    => "required|unique:projects,project_name," . $id .",id",
            "slug"                            => "nullable",
            "address"                         => "required",
            "project_location"                => "required",
            "registered_company_name"         => "required|unique:projects,registered_company_name," . $id.",id",
            "comapany_tax_number"             => "required|unique:projects,comapany_tax_number," . $id.",id",
            "project_type"                    => "nullable",
            "project_duration_in_years"        => "nullable",
            "accepted_currency"               => "nullable",
            "starting_date"                   => "nullable",
            "accepted_currency"               => "nullable",
            "delivery_date"                   => "nullable",
            "area_starting_per_sqm"           => "nullable",
            "price_starting_per_sqm"          => "nullable",
            "land_price_starting"             => "nullable",

            "home_page_banner"                => "nullable|mimes:jpeg,png,jpg,gif",
            "home_page_banner_text"           => "nullable",
            "home_page_header_title"          => "nullable",
            "home_page_header_paragraph"      => "nullable",
            "home_page_footer_title"          => "nullable",
            "home_page_footer_paragraph"      => "nullable",
            "project_timeline"                => "nullable",
            "project_management_companies"    => "nullable",
            "home_page_photos_gallery"        => "nullable",

            "qna_page_banner"                 => "nullable|mimes:jpeg,png,jpg,gif",
            "qna_page_banner_text"            => "nullable",
            "qna_page_header_title"           => "nullable",
            "qna_page_header_paragraph"       => "nullable",
            "qna_page_footer_title"           => "nullable",
            "qna_page_footer_paragraph"       => "nullable",

            "buy_home_page_banner"            => "nullable|mimes:jpeg,png,jpg,gif",
            "buy_home_page_banner_text"       => "nullable",
            "buy_home_page_header_title"      => "nullable",
            "buy_home_page_header_paragraph"  => "nullable",
            "buy_home_page_footer_title"      => "nullable",
            "buy_home_page_footer_paragraph"  => "nullable",

            "buy_land_page_banner"            => "nullable|mimes:jpeg,png,jpg,gif",
            "buy_land_page_banner_text"       => "nullable",
            "buy_land_page_header_title"      => "nullable",
            "buy_land_page_header_paragraph"  => "nullable",
            "buy_land_page_footer_title"      => "nullable",
            "buy_land_page_footer_paragraph"  => "nullable",

            "amenities_page_banner"           => "nullable|mimes:jpeg,png,jpg,gif",
            "amenities_page_banner_text"      => "nullable",
            "amenities_page_header_title"     => "nullable",
            "amenities_page_header_paragraph" => "nullable",
            "amenities_page_footer_title"     => "nullable",
            "amenities_page_footer_paragraph" => "nullable",

            "financing_page_banner"           => "nullable|mimes:jpeg,png,jpg,gif",
            "financing_page_banner_text"      => "nullable",
            "financing_page_header_title"     => "nullable",
            "financing_page_header_paragraph" => "nullable",
            "financing_page_footer_title"     => "nullable",
            "financing_page_footer_paragraph" => "nullable",

            "who_page_banner"                 => "nullable|mimes:jpeg,png,jpg,gif",
            "who_page_banner_text"            => "nullable",
            "who_page_header_title"           => "nullable",
            "who_page_header_paragraph"       => "nullable",
            "who_page_footer_title"           => "nullable",
            "who_page_footer_paragraph"       => "nullable",

            "contact_page_banner"             => "nullable|mimes:jpeg,png,jpg,gif",
            "contact_page_banner_text"        => "nullable",
            "contact_page_header_title"       => "nullable",
            "contact_page_header_paragraph"   => "nullable",
            "contact_page_footer_title"       => "nullable",
            "contact_page_footer_paragraph"   => "nullable",

            "kingsmen_details"                => "nullable",
            "phone_number"                    => "nullable",
            "project_address"                 => "nullable",
            "email"                           => "nullable|email",

            "project_brochure"                => "nullable",
            "project_elevations"              => "nullable",
            "construction_rules"              => "nullable",
            "other"                           => "nullable",

            "land_number"                     => "nullable",
            "land_category"                   => "nullable",
            "land_area"                       => "nullable",
            "land_price_per_sqm"              => "nullable",
            "total_land_price"                => "nullable",
            "interactive_map"                 => "nullable",
            "all_listings_land"               => "nullable|mimes:csv",

            "house_type"                      => "nullable",
            "house_area_per_sqm"              => "nullable",
            "cost_of_construction_per_sqm"    => "nullable",
            "all_listings_house"              => "nullable|mimes:csv",
            "technical_specs"                 => "nullable|mimes:pdf",
            "total_construction_cost"         => "nullable",

            "selling_contract.*"                => "nullable|mimes:pdf",
            "company_papers.*"                  => "nullable|mimes:pdf",
            "project_rules_and_regulation.*"    => "nullable|mimes:pdf",
            "other_files.*"                     => "nullable",

            "project_thumbnail"               => "nullable",
            "title"                           => "nullable",
            "description"                     => "nullable",
            "total_price_with_land"           => "nullable",
            "deposit"                         => "nullable",
            "remainingAmount_as_bankTransfer" => "nullable",
            "full_payment_usdt"               => "nullable",
            "template"                        => "nullable",
        ]);

        DB::beginTransaction();
        try {

            $project  = Project::find($id);

            $logo_url = '';

          // Delete previous files on update
          if($request->hasFile('project_logo')){
            if ($oldFile = $project->project_logo) {
                $filePath = public_path($oldFile);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            // Set new file
                $logo_url = uploadFileToPublic($request->file('project_logo'), 'projects/logo');
                $project->project_logo   = $logo_url;
            }

            $project->project_name             = $request->project_name;
            $project->slug                    = Str::slug($request->project_name);
            $project->address                  = $request->address;
            $project->project_location         = $request->project_location;
            $project->registered_company_name  = $request->registered_company_name;
            $project->comapany_tax_number      = $request->comapany_tax_number;
            $project->project_type             = $request->project_type;
            $project->project_duration_in_years =$request->project_duration_in_years;
            $project->accepted_currency        = $request->accepted_currency;
            $project->starting_date            = date("Y-m-d", strtotime($request->starting_date));
            $project->delivery_date            = date("Y-m-d", strtotime($request->delivery_date));
            $project->area_starting_per_sqm    = $request->area_starting_per_sqm;
            $project->price_starting_per_sqm   = $request->price_starting_per_sqm;
            $project->land_price_starting      = $request->land_price_starting;

            // land
            $project->land_number        = $request->land_number;
            $project->land_category      = $request->land_category;
            $project->land_area          = $request->land_area;
            $project->land_price_per_sqm = $request->land_price_per_sqm;
            $project->total_land_price   = $request->total_land_price;
            $project->interactive_map    = $request->interactive_map;

            $all_listings_land           = '';
            // Delete previous files on update
            if($request->hasFile('all_listings_land')){
                if ($oldFile = $project->all_listings_land) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                // Set new file
                $all_listings_land = uploadFileToPublic($request->file('all_listings_land'), 'projects/all_listings_land');
                $project->all_listings_land = $all_listings_land;
            }

            // land
            $project->house_type                   = $request->house_type;
            $project->house_area_per_sqm           = $request->house_area_per_sqm;
            $project->cost_of_construction_per_sqm = $request->cost_of_construction_per_sqm;
            $project->total_construction_cost      = $request->total_construction_cost;
            $all_listings_house                    = '';

           if($request->hasFile('all_listings_house')){
            if ($oldFile = $project->all_listings_house) {
                $filePath = public_path($oldFile);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
                $all_listings_house = uploadFileToPublic($request->file('all_listings_house'), 'projects/all_listings_house');
                $project->all_listings_house = $all_listings_house;
            }

            $technical_specs = '';

           if($request->hasFile('technical_specs')){
               if ($oldFile = $project->technical_specs) {
                   $filePath = public_path($oldFile);
                   if (file_exists($filePath)) {
                       unlink($filePath);
                   }
               }
                $technical_specs = uploadFileToPublic($request->file('technical_specs'), 'projects/technical_specs');
                $project->technical_specs = $technical_specs;
            }

            // Multiple files save to db
            $selling_contract_url = '';
            $selling_contracts = $request->file('selling_contract');
            $path = [];

            if($request->hasFile('selling_contract'))
            {
                 $filePaths = json_decode($project->selling_contract, true);
                 if ($filePaths !== null) {
                     foreach ($filePaths as $filePath) {
                         if (file_exists($filePath)) {
                             unlink($filePath);
                         }
                     }
                 }


                if($selling_contracts)
                {
                        foreach ($selling_contracts as $selling_contract) {
                            $selling_contract_url = uploadFileToPublic($selling_contract, 'projects/selling_contract');
                            $path[] = public_path($selling_contract_url);
                        }
                        $project->selling_contract = json_encode($path);
                }
            }

            //    Company papers
               $company_papers_url = [];
               $company_papers = $request->file('company_papers');
               $path = [];

               if($request->hasFile('company_papers'))
               {
                    $filePaths = json_decode($project->company_papers, true);
                    if ($filePaths !== null) {
                        foreach ($filePaths as $filePath) {
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                        }
                    }

                    if($company_papers)
                    {
                            foreach ($company_papers as $company_paper) {
                                $company_papers_url = uploadFileToPublic($company_paper, 'projects/company_papers');
                                $path[] = public_path($company_papers_url);
                            }
                            $project->company_papers = json_encode($path);
                    }
                }

            //    Project rules and regulations
               $project_rules_and_regulation_url = [];
               $project_rules_and_regulations = $request->file('project_rules_and_regulation');
               $path = [];

               if($request->hasFile('project_rules_and_regulation'))
               {
                    $filePaths = json_decode($project->project_rules_and_regulation, true);
                    if ($filePaths !== null) {
                        foreach ($filePaths as $filePath) {
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                        }
                    }

                    if($project_rules_and_regulations)
                    {
                            foreach ($project_rules_and_regulations as $project_rules_and_regulation) {
                                $project_rules_and_regulation_url = uploadFileToPublic($project_rules_and_regulation, 'projects/project_rules_and_regulation');
                                $path[] = public_path($project_rules_and_regulation_url);
                            }
                            $project->project_rules_and_regulation = json_encode($path);
                    }
                }

            //    Other Files
               $other_files_url = [];
               $other_files = $request->file('other_files');
               $path = [];

               if($request->hasFile('other_files'))
               {
                    $filePaths = json_decode($project->other_files, true);
                    if ($filePaths !== null) {
                        foreach ($filePaths as $filePath) {
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                        }
                    }

                    foreach ($other_files as $other_file) {
                        $other_files_url = uploadFileToPublic($other_file, 'projects/other_files');
                        $path[] = public_path($other_files_url);
                    }
                    $project->other_files = json_encode($path);
               }

            // home page
            $home_page_banner = '';
            if($request->hasFile('home_page_banner')){
                if ($oldFile = $project->home_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $home_page_banner = uploadFileToPublic($request->file('home_page_banner'), 'projects/home_page_banner');
                $project->home_page_banner             = $home_page_banner;
            }
            $project->home_page_banner_text        = $request->home_page_banner_text;
            $project->home_page_header_title       = $request->home_page_header_title;
            $project->home_page_header_paragraph   = $request->home_page_header_paragraph;
            $project->home_page_footer_title       = $request->home_page_footer_title;
            $project->home_page_footer_paragraph   = $request->home_page_footer_paragraph;
            $project->project_timeline             = $request->project_timeline;
            $project->project_management_companies = $request->project_management_companies;
            $project->full_payment_usdt            =$request->full_payment_usdt;


            $photos_gallery = $request->file('home_page_photos_gallery');

            //Delete previous files on update
            if($request->hasFile('home_page_photos_gallery')){
                $imagePaths = json_decode($project->home_page_photos_gallery, true);
                if ($imagePaths !== null) {
                    foreach ($imagePaths as $imagePath) {
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
                }

            // Put new files
            if($photos_gallery)
                {
                    foreach ($photos_gallery as $photo) {
                        // Resize the image to a specific width and height
                        $resizedImage = Image::make($photo);

                        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
                        $resizedImage->resize(560, 320);

                        $resizedImage->save('uploads/projects/home_page_photos_gallery/'.$filename);
                        $path[] = $resizedImage->basePath();
                    }
                    $project->home_page_photos_gallery = json_encode($path);
                }
            }
            //End Multiple photo resize and put link to db

            $qna_page_banner = '';
            if($request->hasFile('qna_page_banner')){
                if ($oldFile = $project->qna_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $qna_page_banner = uploadFileToPublic($request->file('qna_page_banner'), 'projects/qna_page_banner');
                $project->qna_page_banner           = $qna_page_banner;
            }

            $project->qna_page_banner_text      = $request->qna_page_banner_text;
            $project->qna_page_header_title     = $request->qna_page_header_title;
            $project->qna_page_header_paragraph = $request->qna_page_header_paragraph;
            $project->qna_page_footer_title     = $request->qna_page_footer_title;
            $project->qna_page_footer_paragraph = $request->qna_page_footer_paragraph;

            $buy_home_page_banner = '';
            if($request->hasFile('buy_home_page_banner')){
                if ($oldFile = $project->buy_home_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $buy_home_page_banner = uploadFileToPublic($request->file('buy_home_page_banner'), 'projects/buy_home_page_banner');
                $project->buy_home_page_banner   = $buy_home_page_banner;
            }
            $project->buy_home_page_banner_text      = $request->buy_home_page_banner_text;
            $project->buy_home_page_header_title     = $request->buy_home_page_header_title;
            $project->buy_home_page_header_paragraph = $request->buy_home_page_header_paragraph;
            $project->buy_home_page_footer_title     = $request->buy_home_page_footer_title;
            $project->buy_home_page_footer_paragraph = $request->buy_home_page_footer_paragraph;

            $buy_land_page_banner = '';
            if($request->hasFile('buy_land_page_banner')){
                if ($oldFile = $project->buy_land_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $buy_land_page_banner = uploadFileToPublic($request->file('buy_land_page_banner'), 'projects/buy_land_page_banner');
                $project->buy_land_page_banner   = $buy_land_page_banner;
            }
            $project->buy_land_page_banner_text      = $request->buy_land_page_banner_text;
            $project->buy_land_page_header_title     = $request->buy_land_page_header_title;
            $project->buy_land_page_header_paragraph = $request->buy_land_page_header_paragraph;
            $project->buy_land_page_footer_title     = $request->buy_land_page_footer_title;
            $project->buy_land_page_footer_paragraph = $request->buy_land_page_footer_paragraph;

            $amenities_page_banner = '';
            if($request->hasFile('amenities_page_banner')){
                if ($oldFile = $project->amenities_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $amenities_page_banner = uploadFileToPublic($request->file('amenities_page_banner'), 'projects/amenities_page_banner');
                $project->amenities_page_banner           = $amenities_page_banner;
            }

            $project->amenities_page_banner_text      = $request->amenities_page_banner_text;
            $project->amenities_page_header_title     = $request->amenities_page_header_title;
            $project->amenities_page_header_paragraph = $request->amenities_page_header_paragraph;
            $project->amenities_page_footer_title     = $request->amenities_page_footer_title;
            $project->amenities_page_footer_paragraph = $request->amenities_page_footer_paragraph;

            $financing_page_banner = '';
            if($request->hasFile('financing_page_banner')){
                if ($oldFile = $project->financing_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $financing_page_banner = uploadFileToPublic($request->file('financing_page_banner'), 'projects/financing_page_banner');
                $project->financing_page_banner  = $financing_page_banner;
            }

            $project->financing_page_banner_text      = $request->financing_page_banner_text;
            $project->financing_page_header_title     = $request->financing_page_header_title;
            $project->financing_page_header_paragraph = $request->financing_page_header_paragraph;
            $project->financing_page_footer_title     = $request->financing_page_footer_title;
            $project->financing_page_footer_paragraph = $request->financing_page_footer_paragraph;

            $who_page_banner = '';
            if($request->hasFile('who_page_banner')){
                if ($oldFile = $project->who_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $who_page_banner = uploadFileToPublic($request->file('who_page_banner'), 'projects/who_page_banner');
                $project->who_page_banner           = $who_page_banner;
            }

            $project->who_page_banner_text      = $request->who_page_banner_text;
            $project->who_page_header_title     = $request->who_page_header_title;
            $project->who_page_header_paragraph = $request->who_page_header_paragraph;
            $project->who_page_footer_title     = $request->who_page_footer_title;
            $project->who_page_footer_paragraph = $request->who_page_footer_paragraph;

            $contact_page_banner = '';
            if($request->hasFile('contact_page_banner')){
                if ($oldFile = $project->contact_page_banner) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $contact_page_banner = uploadFileToPublic($request->file('contact_page_banner'), 'projects/contact_page_banner');
                $project->contact_page_banner           = $contact_page_banner;
            }

            $project->contact_page_banner_text      = $request->contact_page_banner_text;
            $project->contact_page_header_title     = $request->contact_page_header_title;
            $project->contact_page_header_paragraph = $request->contact_page_header_paragraph;
            $project->contact_page_footer_title     = $request->contact_page_footer_title;
            $project->contact_page_footer_paragraph = $request->contact_page_footer_paragraph;

            $project->kingsmen_details = $request->kingsmen_details;
            $project->phone_number     = $request->phone_number;
            $project->project_address  = $request->project_address;
            $project->email            = $request->email;

            $project_brochure   = '';
            $project_elevations = '';
            $construction_rules = '';
            $other              = '';

            if($request->hasFile('project_brochure')){
                if ($oldFile = $project->project_brochure) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $project_brochure = uploadFileToPublic($request->file('project_brochure'), 'projects/project_brochure');
                $project->project_brochure   = $project_brochure;
            }

            if($request->hasFile('project_elevations')){
                if ($oldFile = $project->project_elevations) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $project_elevations = uploadFileToPublic($request->file('project_elevations'), 'projects/project_elevations');
                $project->project_elevations = $project_elevations;
            }

            if($request->hasFile('construction_rules')){
                if ($oldFile = $project->construction_rules) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $construction_rules = uploadFileToPublic($request->file('construction_rules'), 'projects/construction_rules');
                $project->construction_rules = $construction_rules;
            }

            if($request->hasFile('other')){
                if ($oldFile = $project->other) {
                    $filePath = public_path($oldFile);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $other = uploadFileToPublic($request->file('other'), 'projects/other');
                $project->other              = $other;
            }

            $project->template              = $request->template;

            $project->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Updated Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $project->id);
            DB::commit();
            return redirect("admin/$this->module_name");

        } catch (\Throwable $th) {
            DB::rollBack();
            $msg = $th->getMessage();
            flash(icon() . ' ' . Str::singular($this->module_title) . " Update Failed! $msg")->error()->important();
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {

        $this->authorize('delete_projects');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        // Delete the associated files & images
        $fileFields = ['project_logo', 'all_listings_land','all_listings_house','technical_specs','home_page_banner','qna_page_banner','buy_home_page_banner','buy_land_page_banner','amenities_page_banner','financing_page_banner','who_page_banner','contact_page_banner','project_brochure','project_elevations', 'construction_rules','other'];

        foreach ($fileFields as $fileField) {
            $filePath = public_path($$module_name_singular->{$fileField});
            if (file_exists($filePath) && is_file($filePath)) {
                unlink($filePath);
            }
        }

        $multipleFileFields = ['selling_contract','company_papers','project_rules_and_regulation','other_files','home_page_photos_gallery'];
        foreach($multipleFileFields as $multipleFileField){

            $multipleFilePaths = json_decode($$module_name_singular->{$multipleFileField}, true);
            if ($multipleFilePaths !== null) {
                foreach ($multipleFilePaths as $filePath) {
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
            }
        }

        $$module_name_singular->delete();

        flash(icon().' '.Str::singular($module_title)." Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

    public function pipe(){
        return "hello";
    }
}
