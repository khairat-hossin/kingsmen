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

    public function faq()
    {
        return view('frontend.projects.greenhills.faq');
    }

    public function buy_your_home()
    {
        return view('frontend.projects.greenhills.buy-your-home');
    }

    public function buy_your_land()
    {
        return view('frontend.projects.greenhills.buy-your-land');
    }

    public function amenities()
    {
        return view('frontend.projects.greenhills.amenities');
    }

    public function financing()
    {
        return view('frontend.projects.greenhills.financing');
    }

    public function who_we_are()
    {
        return view('frontend.projects.greenhills.who-we-are');
    }
}
