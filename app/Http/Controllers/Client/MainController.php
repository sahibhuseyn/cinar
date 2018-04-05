<?php

namespace App\Http\Controllers\Client;

use App\Facility;
use App\Seo;
use App\Slider;
use App\UserSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        
        $sliders = Slider::getSlider();
        $facilities = Facility::getFacility();

        return view('client.index.index', compact('sliders', 'facilities'));

    }

    public function about(){
        return view('client.about.about');
    }

    public function contact(){
        return view('client.contact.contact');
    }

    public function director(){
        return view('client.director.director');
    }

    public function logo(){
        return view('client.logo.logo');
    }
}
