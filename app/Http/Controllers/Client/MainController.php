<?php

namespace App\Http\Controllers\Client;

use App\Facility;
use App\Seo;
use App\Slider;
use App\UserSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

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

    public function downloadFile($file)
    {
        $myFile = public_path("downloads/".$file);
        $headers = ['Content-Type: application/pdf'];
        $filename = basename($file);
//        dd($filename);

        return response()->download($myFile, $filename ,$headers);
    }

}
