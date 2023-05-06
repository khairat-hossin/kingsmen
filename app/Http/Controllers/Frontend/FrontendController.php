<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Project;
use App\Models\PrivateInvestment;
use App\Models\Crowdfunding;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.index', compact('body_class'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    public function team()
    {
         $teams = Team::all();

         return view('frontend.team', compact('teams'));
    }

    public function projects()
    {
        $projects = Project::all();

        return view('frontend.project', compact('projects'));
    }

    public function crowdfunding()
    {
        $crowdfundings = Crowdfunding::all();

        return view('frontend.crowdfunding', compact('crowdfundings'));
    }

    public function one_tree_armenia()
    {
        return view('frontend.one-tree-armenia');
    }

    public function the_western_village()
    {
        return view('frontend.the-western-village');
    }

    public function united_8_apartment()
    {
        return view('frontend.united-8-apartment');
    }

    public function privateInvestments()
    {
        $privateInvestments = PrivateInvestment::all();

        return view('frontend.private-investments', compact('privateInvestments'));
    }

    public function faq()
    {
        return view('frontend.faq');
    }
}
