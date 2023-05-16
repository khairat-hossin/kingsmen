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
        $this->authorize('view_crowdfundings');

        $crowdfundings= DB::table('crowdfundings')->select('*')->get();
        return view('backend.crowdfundings.index', compact('crowdfundings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add_crowdfundings');

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

        $request->validate([
            'project_name'                             => 'required|unique:'.$module_model.',project_name',
            'project_location'                         => 'nullable',
            'registered_company_name'                  => 'nullable',
            'company_tax_number'                       => 'nullable',
            'project_type'                             => 'nullable',
            'investment_duration'                      => 'nullable',
            'investment_duration_in_years'             => 'nullable',
            'type_of_investment'                       => 'nullable',
            'accepted_currency'                        => 'nullable',
            'project_starting_date'                    => 'nullable|date',
            'project_delivery_date'                    => 'nullable|date',
            'land_category'                            => 'nullable',
            'land_area_per_sqm'                        => 'nullable',
            'land_cost_per_sqm'                        => 'nullable',
            'total_land_cost'                          => 'nullable',
            'available_construction_type'              => 'nullable',
            'built_up_area_size_per_sqm'               => 'nullable',
            'built_area_value_per_sqm'                 => 'nullable',
            'total_built_up_area_value'                => 'nullable',
            'investment_in'                            => 'nullable',
            'total_number_of_investment_in'            => 'nullable',

            'real_estate_value'                                     => 'nullable',
            'proposed_additional_investment_cost'                   => 'nullable',
            'total_cost_of_investment'                              => 'nullable',
            'total_registered_shares_at_local_authoritise'          => 'nullable',
            'shares_listed_for_sale'                                => 'nullable',
            'project_duration_in_years'                             => 'nullable',
            'investment_break_even_expected_after_year'             => 'nullable',
            'profit_after_return_of_investment_is'                  => 'nullable',
            'expected_profit_after_break_even'                      => 'nullable',
            'expected_profit_percent_after_break_even_as_per_study' => 'nullable',
            'one_shares_of_ownership_of_the_land_in_sqm'            => 'nullable',
            'one_shares_of_ownership_of_the_construction_in_sqm'    => 'nullable',
            'one_shares_of_ownership_in_number_of_investing_in'     => 'nullable',

            'share_price'                       => 'nullable',
            'deposit'                           => 'nullable',
            'remaining_amount_as_bank_transfer' => 'nullable',
            'full_payment_in_USDT_bLockchain'   => 'nullable',
            'shares_selling_contract'           => 'nullable',

            'company_papers'       => 'nullable',
            'buisness_plan'        => 'nullable',
            'project_logo'         => 'nullable',
            'crowfund_thumbnail'   => 'nullable',
            'title'                => 'nullable',
            'description'          => 'nullable',
            'choose_template'      => 'nullable',
            'banner'               => 'nullable',
            'banner_text'          => 'nullable',
            'title_1'              => 'nullable',
            'paragraph_1'          => 'nullable',
            'title_2'              => 'nullable',
            'paragraph_2'          => 'nullable',
            'photos_gallery'       => 'nullable',
            'project_timeline'     => 'nullable',
            'management_companies' => 'nullable'
        ]);

        DB::beginTransaction();
        try {
            $crowdfunding  = new $this->module_model();
            $crowdfunding->project_name                 = $request->project_name;
            $crowdfunding->project_address              = $request->project_address;
            $crowdfunding->project_location             = $request->project_location;
            $crowdfunding->registered_company_name      = $request->registered_company_name;
            $crowdfunding->company_tax_number           = $request->company_tax_number;
            $crowdfunding->project_type                 = $request->project_type;
            $crowdfunding->investment_duration          = $request->investment_duration;
            $crowdfunding->investment_duration_in_years = $request->investment_duration_in_years;
            $crowdfunding->type_of_investment           = $request->type_of_investment;
            $crowdfunding->accepted_currency            = $request->accepted_currency;

            $crowdfunding->project_starting_date               = date("Y-m-d", strtotime($request->project_starting_date));
            $crowdfunding->project_delivery_date               = date("Y-m-d", strtotime($request->project_delivery_date));
            $crowdfunding->land_category                       = $request->land_category;
            $crowdfunding->land_area_per_sqm                   = $request->land_area_per_sqm;
            $crowdfunding->land_cost_per_sqm                   = $request->land_cost_per_sqm;
            $crowdfunding->total_land_cost                     = $request->total_land_cost;
            $crowdfunding->available_construction_type         = $request->available_construction_type;
            $crowdfunding->built_up_area_size_per_sqm          = $request->built_up_area_size_per_sqm;
            $crowdfunding->built_area_value_per_sqm            = $request->built_area_value_per_sqm;
            $crowdfunding->total_built_up_area_value           = $request->total_built_up_area_value;
            $crowdfunding->investment_in                       = $request->investment_in;
            $crowdfunding->total_number_of_investment_in       = $request->total_number_of_investment_in;
            $crowdfunding->real_estate_value                   = $request->real_estate_value;
            $crowdfunding->proposed_additional_investment_cost = $request->proposed_additional_investment_cost;
            $crowdfunding->total_cost_of_investment            = $request->total_cost_of_investment;

            $crowdfunding->total_registered_shares_at_local_authoritise           = $request->total_registered_shares_at_local_authoritise;
            $crowdfunding->shares_listed_for_sale                                 = $request->shares_listed_for_sale;
            $crowdfunding->project_duration_in_years                              = $request->project_duration_in_years;
            $crowdfunding->investment_break_even_expected_after_year              = $request->investment_break_even_expected_after_year;
            $crowdfunding->profit_after_return_of_investment_is                   = $request->profit_after_return_of_investment_is;
            $crowdfunding->expected_profit_after_break_even                       = $request->expected_profit_after_break_even;
            $crowdfunding->expected_profit_percent_after_break_even_as_per_study  = $request->expected_profit_percent_after_break_even_as_per_study;
            $crowdfunding->one_shares_of_ownership_of_the_land_in_sqm             = $request->one_shares_of_ownership_of_the_land_in_sqm;
            $crowdfunding->one_shares_of_ownership_of_the_construction_in_sqm     = $request->one_shares_of_ownership_of_the_construction_in_sqm;
            $crowdfunding->one_shares_of_ownership_in_number_of_investing_in      = $request->one_shares_of_ownership_in_number_of_investing_in;
            $crowdfunding->share_price                                            = $request->share_price;
            $crowdfunding->deposit                                                = $request->deposit;
            $crowdfunding->remaining_amount_as_bank_transfer                      = $request->remaining_amount_as_bank_transfer;
            $crowdfunding->full_payment_in_USDT_bLockchain                        = $request->full_payment_in_USDT_bLockchain;

            $selling_contract = '';
            $company_papers   = '';
            $buisness_plan    = '';
            $project_logo     = '';

            if ($request->selling_contract) {
                $selling_contract_url = uploadFileToPublic($request->file('selling_contract'), 'crowdfunding/selling_contract');

                $crowdfunding->selling_contract = $selling_contract_url;
            }

            if ($request->company_papers) {
                $company_papers_url = uploadFileToPublic($request->file('company_papers'), 'crowdfunding/company_papers');

                $crowdfunding->company_papers = $company_papers_url;
            }

            if ($request->buisness_plan) {
                $buisness_plan_url = uploadFileToPublic($request->file('buisness_plan'), 'crowdfunding/buisness_plan');

                $crowdfunding->buisness_plan = $buisness_plan_url;
            }

            if ($request->project_logo) {
                $project_logo_url = uploadFileToPublic($request->file('project_logo'), 'crowdfunding/project_logo');

                $crowdfunding->project_logo = $project_logo_url;
            }


            $crowdfunding->crowfund_thumbnail = $request->crowfund_thumbnail;
            $crowdfunding->title              = $request->title;
            $crowdfunding->description        = $request->description;
            $crowdfunding->choose_template    = $request->choose_template;

            $banner = '';

            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'crowdfunding/banner');

                $crowdfunding->banner = $banner_url;
            }

            // For Multiple photos
            $photos_gallery_url = '';
            $photos_gallery = $request->file('photos_gallery');
            if($photos_gallery)
            {
                foreach ($photos_gallery as $photo) {
                    $photos_gallery_url = uploadFileToPublic($photo, 'crowdfunding/photos_gallery');
                }
                $crowdfunding->photos_gallery = $photos_gallery_url;
            }

            $crowdfunding->banner_text          = $request->banner_text;
            $crowdfunding->title_1              = $request->title_1;
            $crowdfunding->paragraph_1          = $request->paragraph_1;
            $crowdfunding->title_2              = $request->title_2;
            $crowdfunding->paragraph_2          = $request->paragraph_2;
            $crowdfunding->project_timeline     = $request->project_timeline;
            $crowdfunding->management_companies = $request->management_companies;

            $crowdfunding->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $crowdfunding->id);
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
        $this->authorize('view_crowdfundings');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';
        $crowdfunding = Crowdfunding::find($id);
        return view('backend.crowdfundings.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'crowdfunding'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(request $request, string $id)
    {
        $this->authorize('edit_crowdfundings');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $crowdfunding = Crowdfunding::find($id);

        return view('backend.crowdfundings.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'crowdfunding'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module_title         = $this->module_title;
        $module_name          = $this->module_name;
        $module_path          = $this->module_path;
        $module_icon          = $this->module_icon;
        $module_model         = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        $request->validate([
            'project_name'                  => 'required|unique:private_investments,project_name,' . $id.',id',
            'project_location'              => 'nullable',
            'registered_company_name'       => 'nullable',
            'company_tax_number'            => 'nullable',
            'project_type'                  => 'nullable',
            'investment_duration'           => 'nullable',
            'investment_duration_in_years'  => 'nullable',
            'type_of_investment'            => 'nullable',
            'accepted_currency'             => 'nullable',
            'project_starting_date'         => 'nullable|date',
            'project_delivery_date'         => 'nullable|date',
            'land_category'                 => 'nullable',
            'land_area_per_sqm'             => 'nullable',
            'land_cost_per_sqm'             => 'nullable',
            'total_land_cost'               => 'nullable',
            'available_construction_type'   => 'nullable',
            'built_up_area_size_per_sqm'    => 'nullable',
            'built_area_value_per_sqm'      => 'nullable',
            'total_built_up_area_value'     => 'nullable',

            'investment_in'                                         => 'nullable',
            'total_number_of_investment_in'                         => 'nullable',
            'real_estate_value'                                     => 'nullable',
            'proposed_additional_investment_cost'                   => 'nullable',
            'total_cost_of_investment'                              => 'nullable',
            'total_registered_shares_at_local_authoritise'          => 'nullable',
            'shares_listed_for_sale'                                => 'nullable',
            'project_duration_in_years'                             => 'nullable',
            'investment_break_even_expected_after_year'             => 'nullable',
            'profit_after_return_of_investment_is'                  => 'nullable',
            'expected_profit_after_break_even'                      => 'nullable',
            'expected_profit_percent_after_break_even_as_per_study' => 'nullable',
            'one_shares_of_ownership_of_the_land_in_sqm'            => 'nullable',
            'one_shares_of_ownership_of_the_construction_in_sqm'    => 'nullable',
            'one_shares_of_ownership_in_number_of_investing_in'     => 'nullable',

            'share_price' => 'nullable',
            'deposit'     => 'nullable',
            'remaining_amount_as_bank_transfer' => 'nullable',
            'full_payment_in_USDT_bLockchain'   => 'nullable',

            'selling_contract'     => 'nullable',
            'company_papers'       => 'nullable',
            'buisness_plan'        => 'nullable',
            'project_logo'         => 'nullable',
            'crowfund_thumbnail'   => 'nullable',
            'title'                => 'nullable',
            'description'          => 'nullable',
            'choose_template'      => 'nullable',
            'banner'               => 'nullable',
            'banner_text'          => 'nullable',
            'title_1'              => 'nullable',
            'paragraph_1'          => 'nullable',
            'title_2'              => 'nullable',
            'paragraph_2'          => 'nullable',
            'photos_gallery'       => 'nullable',
            'project_timeline'     => 'nullable',
            'management_companies' => 'nullable'
        ]);

        DB::beginTransaction();
        try {

            $crowdfunding = Crowdfunding::find($id);

            $crowdfunding->project_name                 = $request->project_name;
            $crowdfunding->project_address              = $request->project_address;
            $crowdfunding->project_location             = $request->project_location;
            $crowdfunding->registered_company_name      = $request->registered_company_name;
            $crowdfunding->company_tax_number           = $request->company_tax_number;
            $crowdfunding->project_type                 = $request->project_type;
            $crowdfunding->investment_duration          = $request->investment_duration;
            $crowdfunding->investment_duration_in_years = $request->investment_duration_in_years;
            $crowdfunding->type_of_investment           = $request->type_of_investment;
            $crowdfunding->accepted_currency            = $request->accepted_currency;
            $crowdfunding->project_starting_date        =  date("Y-m-d", strtotime($request->project_starting_date));
            $crowdfunding->project_delivery_date        =  date("Y-m-d", strtotime($request->project_delivery_date));
            $crowdfunding->land_category                = $request->land_category;
            $crowdfunding->land_area_per_sqm            = $request->land_area_per_sqm;
            $crowdfunding->land_cost_per_sqm            = $request->land_cost_per_sqm;
            $crowdfunding->total_land_cost              = $request->total_land_cost;

            $crowdfunding->available_construction_type                   = $request->available_construction_type;
            $crowdfunding->built_up_area_size_per_sqm                    = $request->built_up_area_size_per_sqm;
            $crowdfunding->built_area_value_per_sqm                      = $request->built_area_value_per_sqm;
            $crowdfunding->total_built_up_area_value                     = $request->total_built_up_area_value;
            $crowdfunding->investment_in                                 = $request->investment_in;
            $crowdfunding->total_number_of_investment_in                 = $request->total_number_of_investment_in;
            $crowdfunding->real_estate_value                             = $request->real_estate_value;
            $crowdfunding->proposed_additional_investment_cost           = $request->proposed_additional_investment_cost;
            $crowdfunding->total_cost_of_investment                      = $request->total_cost_of_investment;
            $crowdfunding->total_registered_shares_at_local_authoritise  = $request->total_registered_shares_at_local_authoritise;
            $crowdfunding->shares_listed_for_sale                        = $request->shares_listed_for_sale;
            $crowdfunding->project_duration_in_years                     = $request->project_duration_in_years;
            $crowdfunding->investment_break_even_expected_after_year     = $request->investment_break_even_expected_after_year;
            $crowdfunding->profit_after_return_of_investment_is          = $request->profit_after_return_of_investment_is;
            $crowdfunding->expected_profit_after_break_even              = $request->expected_profit_after_break_even;

            $crowdfunding->expected_profit_percent_after_break_even_as_per_study  = $request->expected_profit_percent_after_break_even_as_per_study;
            $crowdfunding->one_shares_of_ownership_of_the_land_in_sqm             = $request->one_shares_of_ownership_of_the_land_in_sqm;
            $crowdfunding->one_shares_of_ownership_of_the_construction_in_sqm     = $request->one_shares_of_ownership_of_the_construction_in_sqm;
            $crowdfunding->one_shares_of_ownership_in_number_of_investing_in      = $request->one_shares_of_ownership_in_number_of_investing_in;
            $crowdfunding->share_price                                            = $request->share_price;
            $crowdfunding->deposit                                                = $request->deposit;
            $crowdfunding->remaining_amount_as_bank_transfer                      = $request->remaining_amount_as_bank_transfer;
            $crowdfunding->full_payment_in_USDT_bLockchain                        = $request->full_payment_in_USDT_bLockchain;

            $selling_contract = '';
            $company_papers   = '';
            $buisness_plan    = '';
            $project_logo     = '';

            if ($request->selling_contract) {
                $selling_contract_url = uploadFileToPublic($request->file('selling_contract'), 'crowdfunding/selling_contract');

                $crowdfunding->selling_contract = $selling_contract_url;
            }

            if ($request->company_papers) {
                $company_papers_url = uploadFileToPublic($request->file('company_papers'), 'crowdfunding/company_papers');

                $crowdfunding->company_papers = $company_papers_url;
            }

            if ($request->buisness_plan) {
                $buisness_plan_url = uploadFileToPublic($request->file('buisness_plan'), 'crowdfunding/buisness_plan');

                $crowdfunding->buisness_plan = $buisness_plan_url;
            }

            if ($request->project_logo) {
                $project_logo_url = uploadFileToPublic($request->file('project_logo'), 'crowdfunding/project_logo');

                $crowdfunding->project_logo = $project_logo_url;
            }

            $crowdfunding->crowfund_thumbnail = $request->crowfund_thumbnail;
            $crowdfunding->title              = $request->title;
            $crowdfunding->description        = $request->description;
            $crowdfunding->choose_template    = $request->choose_template;

            $banner = '';

            if ($request->banner) {
                $banner_url = uploadFileToPublic($request->file('banner'), 'crowdfunding/banner');

                $crowdfunding->banner = $banner_url;
            }

            $crowdfunding->banner_text          = $request->banner_text;
            $crowdfunding->title_1              = $request->title_1;
            $crowdfunding->paragraph_1          = $request->paragraph_1;
            $crowdfunding->title_2              = $request->title_2;
            $crowdfunding->paragraph_2          = $request->paragraph_2;

            // For Multiple photos
            $photos_gallery_url = '';
            $photos_gallery = $request->file('photos_gallery');
            if($photos_gallery)
            {
                foreach ($photos_gallery as $photo) {
                    $photos_gallery_url = uploadFileToPublic($photo, 'crowdfunding/photos_gallery');
                }
                $crowdfunding->photos_gallery = $photos_gallery_url;
            }

            $crowdfunding->project_timeline     = $request->project_timeline;
            $crowdfunding->management_companies = $request->management_companies;


            $crowdfunding->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $crowdfunding->id);
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
        $this->authorize('delete_crowdfundings');

        $module_title         = $this->module_title;
        $module_name          = $this->module_name;
        $module_path          = $this->module_path;
        $module_icon          = $this->module_icon;
        $module_model         = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        flash(icon().' '.Str::singular($module_title)." Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }
}
