<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateInvestment extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_address',
        'project_location',
        'registered_company_name',
        'company_tax_number',
        'project_type',
        'investment_duration',
        'investment_duration_in_years',
        'investment_duration_in_years_2',
        'type_of_investment',

        'accepted_currency',
        'project_starting_date',
        'project_delivery_date',
        'project_duration_in_years',
        'land_category',
        'land_area_in_sqm',
        'land_cost_per_sqm',
        'total_land_cost',
        'project_duration_in_years_before_generating_profit',
        'available_construction_type',

        'built_up_area_size_per_sqm',
        'built_up_area_value_per_sqm',
        'investment_in',
        'total_built_up_area_value',
        'total_number_of_investment_in',
        'proposed_additional_investment_cost',
        'real_estate_value',
        'total_cost_of_investment',
        'shares_listed_for_sale',
        'investment_break_even_expected_at_year',

        'profit_after_return_on_investment_is',
        'expected_profit_after_break_even',
        'expected_profit_percent_after_break_even_as_per_study',
        'deposit',
        'remaining_amount_as_bank_transfer',
        'shares_selling_contract',
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
        'photo_gallery'
    ];
}
