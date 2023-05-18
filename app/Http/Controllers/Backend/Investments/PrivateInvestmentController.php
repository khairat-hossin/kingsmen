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
        $this->module_title = 'Private Investments';

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
        $this->authorize('view_private_investments');

        $private_investments= DB::table('private_investments')->select('*')->get();
        return view('backend.private-investments.index', compact('private_investments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add_private_investments');

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
        $module_action = 'store';
        $request->validate([
            "project_name"                   => "required|unique:" . $this->module_model . ",project_name",
            "project_address"                => "required",
            "project_location"               => "required",
            "registered_company_name"        => "required",
            "company_tax_number"             => "required|unique:" . $this->module_model . ",company_tax_number",
            "project_type"                   => "required",
            "accepted_currency"              => "required",
            "investment_duration"            => "required",
            "investment_duration_in_years"   => "required",
            "investment_duration_in_years_2" => "required",

            "type_of_investment"             => "nullable",
            "project_delivery_date"          => "nullable",
            "project_duration_in_years"      => "nullable",
            "land_category"                  => "nullable",
            "land_area_in_sqm"               => "nullable",
            "land_cost_per_sqm"              => "nullable",
            "total_land_cost"                => "nullable",
            "project_duration_in_years_before_generating_profit" => "nullable",

            "available_construction_type"    => "nullable",
            "built_up_area_size_per_sqm"     => "nullable",
            "built_up_area_value_per_sqm"    => "nullable",
            "investment_in"                  => "nullable",
            "total_built_up_area_value"      => "nullable",
            "total_number_of_investment_in"  => "nullable",

            "proposed_additional_investment_cost"    => "nullable",
            "real_estate_value"                       => "nullable",
            "total_cost_of_investment"               => "nullable",
            "shares_listed_for_sale"                 => "nullable",
            "investment_break_even_expected_at_year" => "nullable",
            "profit_after_return_on_investment_is"   => "nullable",

            "expected_profit_after_break_even"                      => "nullable",
            "expected_profit_percent_after_break_even_as_per_study" => "nullable",
            "deposit"                                               => "nullable",
            "remaining_amount_as_bank_transfer"                     => "nullable",
            "shares_selling_contract"                               => "nullable|mimes:pdf",
            "company_papers"                                        => "nullable|mimes:pdf",
            "buisness_plan"                                         => "nullable|mimes:pdf",  
           
            "project_logo"                 => "nullable",
            "crowfund_thumbnail"           => "nullable",
            "title"                        => "nullable",

            "description"       => "nullable",
            "choose_template"   => "nullable",
            "banner"            => "nullable|image",
            "banner_text"       => "nullable",
            "title_1"           => "nullable",
            "paragraph_1"       => "nullable",

            "title_2"           => "nullable",
            "paragraph_2"       => "nullable",
            "photo_gallery"     => "nullable",
        ]);

        DB::beginTransaction();
        try {
            $privateInvestment  = new $this->module_model();

            $privateInvestment->project_name                   = $request->project_name;
            $privateInvestment->project_address                = $request->project_address;
            $privateInvestment->project_location               = $request->project_location;
            $privateInvestment->registered_company_name        = $request->registered_company_name;
            $privateInvestment->company_tax_number             = $request->company_tax_number;
            $privateInvestment->project_type                   = $request->project_type;
            $privateInvestment->accepted_currency              = $request->accepted_currency;
            // $privateInvestment->project_starting_date          = date("Y-m-d", strtotime($request->project_starting_date));
            $privateInvestment->investment_duration            = $request->investment_duration;
            $privateInvestment->investment_duration_in_years   = $request->investment_duration_in_years;
            $privateInvestment->investment_duration_in_years_2 = $request->investment_duration_in_years_2;

            $privateInvestment->type_of_investment                                  = $request->type_of_investment;
            $privateInvestment->project_delivery_date                               = $request->project_delivery_date;
            $privateInvestment->project_duration_in_years                           = $request->project_duration_in_years;
            $privateInvestment->land_category                                       = $request->land_category;
            $privateInvestment->land_area_in_sqm                                    = $request->land_area_in_sqm;
            $privateInvestment->land_cost_per_sqm                                   = $request->land_cost_per_sqm;
            $privateInvestment->total_land_cost                                     = $request->total_land_cost;
            $privateInvestment->project_duration_in_years_before_generating_profit  = $request->project_duration_in_years_before_generating_profit;

            $privateInvestment->available_construction_type   = $request->available_construction_type;
            $privateInvestment->built_up_area_size_per_sqm    = $request->built_up_area_size_per_sqm;
            $privateInvestment->built_up_area_value_per_sqm   = $request->built_up_area_value_per_sqm;
            $privateInvestment->investment_in                 = $request->investment_in;
            $privateInvestment->total_built_up_area_value     = $request->total_built_up_area_value;
            $privateInvestment->total_number_of_investment_in = $request->total_number_of_investment_in;

            $privateInvestment->proposed_additional_investment_cost    = $request->proposed_additional_investment_cost;
            $privateInvestment->real_estate_value                      = $request->real_estate_value;
            $privateInvestment->total_cost_of_investment               = $request->total_cost_of_investment;
            $privateInvestment->shares_listed_for_sale                 = $request->shares_listed_for_sale;
            $privateInvestment->investment_break_even_expected_at_year = $request->investment_break_even_expected_at_year;
            $privateInvestment->profit_after_return_on_investment_is   = $request->profit_after_return_on_investment_is;

            $privateInvestment->expected_profit_after_break_even                      = $request->expected_profit_after_break_even;
            $privateInvestment->expected_profit_percent_after_break_even_as_per_study = $request->expected_profit_percent_after_break_even_as_per_study;
            $privateInvestment->deposit                                               = $request->deposit;
            $privateInvestment->remaining_amount_as_bank_transfer                     = $request->remaining_amount_as_bank_transfer;

            $shares_selling_contract = '';
            $company_papers = '';
            $buisness_plan = '';           

            if ($request->shares_selling_contract) {
                $shares_selling_contract = uploadFileToPublic($request->file('shares_selling_contract'), 'private_investment/shares_selling_contract');
                $privateInvestment->shares_selling_contract             = $shares_selling_contract;
            }

            if ($request->company_papers) {
                $company_papers = uploadFileToPublic($request->file('company_papers'), 'private_investment/company_papers');
                $privateInvestment->company_papers               = $company_papers;
            }

            if ($request->buisness_plan) {
                $buisness_plan = uploadFileToPublic($request->file('buisness_plan'), 'private_investment/buisness_plan');
                $privateInvestment->buisness_plan = $buisness_plan;
            }

           
            $privateInvestment->project_logo                 = $request->project_logo;
            $privateInvestment->crowfund_thumbnail           = $request->crowfund_thumbnail;
            $privateInvestment->title                        = $request->title;

            $banner = '';
            if ($request->banner) {
                $banner = uploadFileToPublic($request->file('banner'), 'private_investment/banner');
                $privateInvestment->banner          = $banner;
            }

            $privateInvestment->description     = $request->description;
            $privateInvestment->choose_template = $request->choose_template;
            $privateInvestment->banner_text     = $request->banner_text;
            $privateInvestment->title_1         = $request->title_1;
            $privateInvestment->paragraph_1     = $request->paragraph_1;

            // Multiple photo put to db
            $photo_galleryurl = '';
            $photo_gallery = $request->file('photo_gallery');
            $photoPaths = [];

            if($photo_gallery)
            {
                 foreach ($photo_gallery as $photo) {
                     $photo_galleryurl = uploadFileToPublic($photo, 'private_investment/photo_gallery');
                     $photoPaths[] = asset($photo_galleryurl);
                 }
                 $privateInvestment->photo_gallery = json_encode($photoPaths);
            }

            $privateInvestment->title_2           = $request->title_2;
            $privateInvestment->paragraph_2      = $request->paragraph_2;

            $privateInvestment->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $privateInvestment->id);
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
    public function show(String $id)
    {

        $this->authorize('view_private_investments');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $private_investment = PrivateInvestment::find($id);

        return view('backend.private-investments.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'private_investment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $this->authorize('edit_private_investments');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $private_investment = PrivateInvestment::find($id);

        return view('backend.private-investments.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'private_investment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $module_action = 'update';
        $privateInvestment  = PrivateInvestment::find($id);

        $request->validate([

            'project_name' => 'required|unique:private_investments,project_name,' . $id.',id',
            'company_tax_number' => 'required|unique:private_investments,company_tax_number,'.$id.',id',

            "project_address"                => "required",
            "project_location"               => "required",
            "registered_company_name"        => "required",
            "project_type"                   => "required",
            "accepted_currency"              => "required",
            "investment_duration"            => "required",
            "investment_duration_in_years"   => "required",
            "investment_duration_in_years_2" => "required",

            "type_of_investment"             => "nullable",
            "project_delivery_date"          => "nullable",
            "project_duration_in_years"      => "nullable",
            "land_category"                  => "nullable",
            "land_area_in_sqm"               => "nullable",
            "land_cost_per_sqm"              => "nullable",
            "total_land_cost"                => "nullable",
            "project_duration_in_years_before_generating_profit" => "nullable",

            "available_construction_type"    => "nullable",
            "built_up_area_size_per_sqm"     => "nullable",
            "built_up_area_value_per_sqm"    => "nullable",
            "investment_in"                  => "nullable",
            "total_built_up_area_value"      => "nullable",
            "total_number_of_investment_in"  => "nullable",

            "proposed_additional_investment_cost"    => "nullable",
            "real_estate_value"                       => "nullable",
            "total_cost_of_investment"               => "nullable",
            "shares_listed_for_sale"                 => "nullable",
            "investment_break_even_expected_at_year" => "nullable",
            "profit_after_return_on_investment_is"   => "nullable",

            "expected_profit_after_break_even"                      => "nullable",
            "expected_profit_percent_after_break_even_as_per_study" => "nullable",
            "deposit"                                               => "nullable",
            "remaining_amount_as_bank_transfer"                     => "nullable",
            "shares_selling_contract"                               => "nullable|mimes:pdf",
            "company_papers"                                        => "nullable|mimes:pdf",
            "buisness_plan"                                         => "nullable|mimes:pdf",    

            "project_logo"                 => "nullable",
            "crowfund_thumbnail"           => "nullable",
            "title"                        => "nullable",

            "description"       => "nullable",
            "choose_template"   => "nullable",
            "banner"            => "nullable|image",
            "banner_text"       => "nullable",
            "title_1"           => "nullable",
            "paragraph_1"       => "nullable",

            "title_2"           => "nullable",
            "paragraph_2"       => "nullable",
            "photo_gallery"     => "nullable",
        ]);

        DB::beginTransaction();
        try {

            $privateInvestment = PrivateInvestment::findOrFail($id);

            $privateInvestment->project_name                   = $request->project_name;
            $privateInvestment->project_address                = $request->project_address;
            $privateInvestment->project_location               = $request->project_location;
            $privateInvestment->registered_company_name        = $request->registered_company_name;
            $privateInvestment->company_tax_number             = $request->company_tax_number;
            $privateInvestment->project_type                   = $request->project_type;
            $privateInvestment->accepted_currency              = $request->accepted_currency;
            $privateInvestment->project_starting_date          = date("Y-m-d", strtotime($request->project_starting_date));
            $privateInvestment->investment_duration            = $request->investment_duration;
            $privateInvestment->investment_duration_in_years   = $request->investment_duration_in_years;
            $privateInvestment->investment_duration_in_years_2 = $request->investment_duration_in_years_2;

            $privateInvestment->type_of_investment                                  = $request->type_of_investment;
            $privateInvestment->project_delivery_date                               = $request->project_delivery_date;
            $privateInvestment->project_duration_in_years                           = $request->project_duration_in_years;
            $privateInvestment->land_category                                       = $request->land_category;
            $privateInvestment->land_area_in_sqm                                    = $request->land_area_in_sqm;
            $privateInvestment->land_cost_per_sqm                                   = $request->land_cost_per_sqm;
            $privateInvestment->total_land_cost                                     = $request->total_land_cost;
            $privateInvestment->project_duration_in_years_before_generating_profit  = $request->project_duration_in_years_before_generating_profit;

            $privateInvestment->available_construction_type   = $request->available_construction_type;
            $privateInvestment->built_up_area_size_per_sqm    = $request->built_up_area_size_per_sqm;
            $privateInvestment->built_up_area_value_per_sqm   = $request->built_up_area_value_per_sqm;
            $privateInvestment->investment_in                 = $request->investment_in;
            $privateInvestment->total_built_up_area_value     = $request->total_built_up_area_value;
            $privateInvestment->total_number_of_investment_in = $request->total_number_of_investment_in;

            $privateInvestment->proposed_additional_investment_cost    = $request->proposed_additional_investment_cost;
            $privateInvestment->real_estate_value                       = $request->real_estate_value;
            $privateInvestment->total_cost_of_investment               = $request->total_cost_of_investment;
            $privateInvestment->shares_listed_for_sale                 = $request->shares_listed_for_sale;
            $privateInvestment->investment_break_even_expected_at_year = $request->investment_break_even_expected_at_year;
            $privateInvestment->profit_after_return_on_investment_is   = $request->profit_after_return_on_investment_is;

            $privateInvestment->expected_profit_after_break_even                      = $request->expected_profit_after_break_even;
            $privateInvestment->expected_profit_percent_after_break_even_as_per_study = $request->expected_profit_percent_after_break_even_as_per_study;
            $privateInvestment->deposit                                               = $request->deposit;
            $privateInvestment->remaining_amount_as_bank_transfer                     = $request->remaining_amount_as_bank_transfer;

            $shares_selling_contract = '';
            $company_papers = '';
            $buisness_plan = '';           

            if ($request->shares_selling_contract) {
                $shares_selling_contract = uploadFileToPublic($request->file('shares_selling_contract'), 'private_investment/shares_selling_contract');
                $privateInvestment->shares_selling_contract = $shares_selling_contract;
            }

            if ($request->company_papers) {
                $company_papers = uploadFileToPublic($request->file('company_papers'), 'private_investment/company_papers');
                $privateInvestment->company_papers = $company_papers;
            }

            if ($request->buisness_plan) {
                $buisness_plan = uploadFileToPublic($request->file('buisness_plan'), 'private_investment/buisness_plan');
                $privateInvestment->buisness_plan = $buisness_plan;
            }


            $privateInvestment->project_logo                 = $request->project_logo;
            $privateInvestment->crowfund_thumbnail           = $request->crowfund_thumbnail;
            $privateInvestment->title                        = $request->title;

            $banner = '';
            if ($request->banner) {
                $banner = uploadFileToPublic($request->file('banner'), 'private_investment/banner');
                $privateInvestment->banner          = $banner;
            }

            $privateInvestment->description     = $request->description;
            $privateInvestment->choose_template = $request->choose_template;
            $privateInvestment->banner_text     = $request->banner_text;
            $privateInvestment->title_1         = $request->title_1;
            $privateInvestment->paragraph_1     = $request->paragraph_1;


            // Multiple photo put to db
            $photo_galleryurl = '';
            $photo_gallery = $request->file('photo_gallery');
            $photoPaths = [];

            if($photo_gallery)
            {
                 foreach ($photo_gallery as $photo) {
                     $photo_galleryurl = uploadFileToPublic($photo, 'private_investment/photo_gallery');
                     $photoPaths[] = asset($photo_galleryurl);
                 }
                 $privateInvestment->photo_gallery = json_encode($photoPaths);
            }

            $privateInvestment->title_2           = $request->title_2;
            $privateInvestment->paragraph_2      = $request->paragraph_2;

            $privateInvestment->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $privateInvestment->id);
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
    public function destroy(String $id)
    {
        $this->authorize('delete_private_investments');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $private_investments = PrivateInvestment::findOrFail($id);


        $private_investments->delete();

        flash(icon().' '.Str::singular($module_title)." Deleted Successfully")->success()->important();

        logUserAccess($private_investments.' '.$private_investments.' | Id: '.$private_investments->id);

        return redirect("admin/$module_name");
    }
}
