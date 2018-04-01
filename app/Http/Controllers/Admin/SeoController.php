<?php

namespace App\Http\Controllers\Admin;

use App\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SeoController extends Controller
{
    public function show(){

        $seos = Seo::getSeo();

        return view('admin.seo.seo', compact('seos'));

    }

    public function add ( Request $request) {

        if (!$request->keywords ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $seo = new Seo();
        $seo->keywords = $request->keywords;
        $seo->description = $request->description;


        $seo->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Seo $seo, Request $request) {
        if (!$request->keywords) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $seo->keywords = $request->keywords;
        $seo->description = $request->description;
        $seo->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Seo $seo) {
        $seo->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
