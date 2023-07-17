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

    // GreenHills>Buy your home projects
    public function astrid_200sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.astrid-200sqm');
    }
    public function liv_200sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.liv-200sqm');
    }
    public function moon_200sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.moon-200sqm');
    }
    public function revna_200sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.revna-200sqm');
    }
    public function astrid_300sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.astrid-300sqm');
    }
    public function liv_300sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.liv-300sqm');
    }
    public function moon_300sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.moon-300sqm');
    }
    public function revna_300sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.revna-300sqm');
    }
    public function astrid_400sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.astrid-400sqm');
    }
    public function liv_400sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.liv-400sqm');
    }
    public function moon_400sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.moon-400sqm');
    }
    public function revna_400sqm()
    {
        return view('frontend.projects.greenhills.buy-your-home.revna-400sqm');
    }

}
