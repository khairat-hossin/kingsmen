<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_text',
        'banner',
        'title',
        'solution_title',
        'solution_image',
        'solution_summary'
    ];
}
