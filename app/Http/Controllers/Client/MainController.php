<?php

namespace App\Http\Controllers\Client;

use App\Facility;
use App\Slider;
use App\UserSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        
        $settings = UserSetting::getSettings();
        $sliders = Slider::getSlider();
        $facilities = Facility::getFacility();

        return view('client.index.index', compact('settings', 'sliders', 'facilities'));

    }
}
