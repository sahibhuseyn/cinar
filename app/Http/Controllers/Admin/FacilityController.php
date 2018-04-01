<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FacilityController extends Controller
{
    public function show(){
        $facilities = Facility::getFacility();

        return view('admin.facility.facility', compact('facilities'));
    }

    public function edit(Facility $facility){

        return view('admin.facility.single', compact('facility'));
    }

    public function add(Request $request){

        if (!$request->body ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $facility = new Facility();
        $facility->icon = $request->icon;
        $facility->name = $request->name;
        $facility->body = $request->body;
        $facility->link = $request->link;


        $facility->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update(Facility $facility, Request $request){

        if (!$request->body) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $facility->body = $request->body;
        $facility->icon = $request->icon;
        $facility->name = $request->name;
        $facility->link = $request->link;
        $facility->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete(Facility $facility){

        $facility->delete();

        Session::flash('Success', 'Successfully deleted');

        return back();
    }
}
