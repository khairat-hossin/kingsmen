<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crowdfunding extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_location',
        'project_address',
        'registered_company_name',
        'company_tax_number',
        'project_type',
        'investment_duration',
        'investment_duration_in_years',
        'type_of_investment',
        'accepted_currency',
        'project_starting_date',
        'project_delivery_date',
        'land_category',
        'land_area_per_sqm',
        'land_cost_per_sqm',
        'total_land_cost',
        'available_construction_type',
        'built_up_area_size_per_sqm',
        'built_area_value_per_sqm',
        'total_built_up_area_value',
        'investment_in',
        'total_number_of_investment_in',
        'real_estate_value',
        'proposed_additional_investment_cost',
        'total_cost_of_investment',
        'total_registered_shares_at_local_authoritise',
        'shares_listed_for_sale',
        'project_duration_in_years',
        'investment_break_even_expected_after_year',
        'profit_after_return_of_investment_is',
        'expected_profit_after_break_even',
        'expected_profit_percent_after_break_even_as_per_study',
        'one_shares_of_ownership_of_the_land_in_sqm',
        'one_shares_of_ownership_of_the_construction_in_sqm',
        'one_shares_of_ownership_in_number_of_investing_in',
        'share_price',
        'deposit',
        'remaining_amount_as_bank_transfer',
        'full_payment_in_USDT_bLockchain',
        'selling_contract',
        'company_papers',
        'buisness_plan',
        'project_logo',
        'crowfund_thumbnail',
        'title',
        'description',
        'choose_template',
        'banner',
        'banner_text',
        'title_1',
        'paragraph_1',
        'title_2',
        'paragraph_2',
        'photos_gallery',
        'project_timeline',
        'management_companies'
    ];
}
