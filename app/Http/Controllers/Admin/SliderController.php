<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function listSlides(){

        $sliders = Slider::getSlider();

        return view('admin.slider.sliders', compact('sliders'));
    }

    public function add(Request $request){


        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        }

        $slide = new Slider;
        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $slide->image = $filename;

        $slide->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }

    public function update(Slider $slider, Request $request){

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);
            $slider->image = $filename;
            $slider->update();
        }

        $slider->update();

        Session::flash('success', 'Successfully updated');
        return back();

    }

    public function delete(Slider $slider){

        $slider->delete();

        Session::flash('success', 'Successfully deleted');
        return back();

    }

}
