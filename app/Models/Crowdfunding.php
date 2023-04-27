<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crowdfunding extends Model
{
    use HasFactory;

    protected $fillable = ['project_name', 'project_location', 'registered_company_name', 'company_tax_number', 'action'];
}
