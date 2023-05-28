<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Project;
use App\Models\PrivateInvestment;
use App\Models\Crowdfunding;
use App\Models\Faq;
use App\Models\AboutUs;
use App\Models\Service;

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
        return view('frontend.projects.project', compact('projects'));
    }

    public function invests()
    {
        return view('frontend.invests.invest');
    }

    public function crowdfunding()
    {
        $crowdfundings = Crowdfunding::all();

        return view('frontend.invests.crowdfunding', compact('crowdfundings'));
    }

    public function one_tree_armenia()
    {
        return view('frontend.invests.one-tree-armenia');
    }

    public function the_western_village()
    {
        return view('frontend.invests.the-western-village');
    }

    public function united_8_apartment()
    {
        return view('frontend.invests.united-8-apartment');
    }

    public function privateInvestments()
    {
        $privateInvestments = PrivateInvestment::all();

        return view('frontend.private-investments', compact('privateInvestments'));
    }

    public function services()
    {
        $services = Service::all();

        $banner = '';
        $title = '';
        $banner_text = '';

        foreach($services as $service)
        {
           if($service->banner)
           {
               $banner = str_replace('\\','/',$service->banner);
           }

           if($service->title)
           {
               $title = $service->title;
           }


           if($service->banner_text)
           {
               $banner_text = $service->banner_text;
           }
       }

        return view('frontend.service', compact('services', 'banner', 'title', 'banner_text'));
    }

    public function about_us()
    {
        $about_us = AboutUs::all();

        $banner = '';
        $banner_text = '';
        $video = '';

        foreach($about_us as $about)
         {
            if($about->banner)
            {
                $banner = str_replace('\\','/',$about->banner);
            }

            if($about->banner_text)
            {
                $banner_text = $about->banner_text;
            }

            if($about->video)
            {
                $video = $about->video;
            }
        }

        return view('frontend.about-us', compact('about_us', 'banner', 'banner_text', 'video'));
    }

    public function faq()
    {
        $faqs = Faq::all();

        foreach($faqs as $faq)
         {
            if($faq->banner)
            {
                $banner = str_replace('\\', '/', $faq->banner);

            }

            if($faq->banner_text)
            {
                $banner_text = $faq->banner_text;
            }

            if($faq->video)
            {
                $video = $faq->video;
            }
        }
        return view('frontend.faq', compact('faqs', 'banner', 'banner_text', 'video'));
    }

    // Ecogardens functions starts here

    public function eco_index()
    {
        $projects = Project::all();
        return view('frontend.projects.ecogardens.index', compact('projects'));
    }

    public function eco_useful_info()
    {
        return view('frontend.projects.ecogardens.useful-info');
    }

    public function eco_location()
    {
        return view('frontend.projects.ecogardens.location');
    }

    public function eco_choose_your_land()
    {
        return view('frontend.projects.ecogardens.choose-your-land');
    }

    public function eco_eco_homes()
    {
        return view('frontend.projects.ecogardens.eco-homes');
    }

    public function eco_ready_to_move()
    {
        return view('frontend.projects.ecogardens.ready-to-move');
    }

    public function eco_71_sqm_eco_homes()
    {
        return view('frontend.projects.ecogardens.71-sqm-eco-homes');
    }

    public function eco_85_90_sqm_eco_homes()
    {
        return view('frontend.projects.ecogardens.85-90-sqm-eco-homes');
    }

    public function eco_116_123_sqm_eco_homes()
    {
        return view('frontend.projects.ecogardens.116-123-sqm-eco-homes');
    }

    public function eco_148_sqm_eco_homes()
    {
        return view('frontend.projects.ecogardens.148-sqm-eco-homes');
    }

    public function eco_232_sqm_eco_homes()
    {
        return view('frontend.projects.ecogardens.232-sqm-eco-homes');
    }

    public function eco_who_we_are()
    {
        return view('frontend.projects.ecogardens.who-we-are');
    }

    public function eco_testimonials()
    {
        return view('frontend.projects.ecogardens.testimonials');
    }
}
