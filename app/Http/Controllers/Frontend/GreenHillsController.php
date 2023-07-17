<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreenHillsController extends Controller
{
    /**
     * Summary of index
     * @return void
     */
    public function index()
    {
        return view('frontend.projects.greenhills.index');
    }

    public function overview()
    {
        return view('frontend.projects.greenhills.overview');
    }
}
