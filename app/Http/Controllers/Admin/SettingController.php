<?php

namespace App\Http\Controllers\Admin;

use App\UserSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function show(){

        $settings = UserSetting::getSettings();

        return view('admin.setting.setting', compact('settings'));

    }

    public function add ( Request $request) {

        if (!$request->phone) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $setting = new UserSetting();
        $setting->work_hours = $request->work_hours;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;

        $setting->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (UserSetting $setting, Request $request) {
        if (!$request->phone) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $setting->work_hours = $request->work_hours;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;
        $setting->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (UserSetting $setting) {

        $setting->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
