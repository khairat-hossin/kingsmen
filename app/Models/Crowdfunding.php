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
        'registered_company_name',
        'company_tax_number',
        'project_type',
        'investment_duration',
        'land_category',
        'total_land_cost',
        'accepted_currency',
        'real_state_value',
        'total_cost_of_investment',
        'profit_after_return_of_investment_is'
    ];
}
