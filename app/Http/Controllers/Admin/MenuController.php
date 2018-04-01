<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function show(){

        $menus = Menu::getMenu();

        return view('admin.menu.menu', compact('menus'));
    }

    public function edit(Menu $menu){

        return view('admin.menu.single', compact('menu'));
    }

    public function add(Request $request){

        $slug = str_slug($request->name);

        $exists = Menu::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Menu with the same name already exists');

            return back();
        }


        $menu = new Menu;
        $menu->name = $request->name;
        $menu->slug = $slug;

        $menu->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update(Menu $menu, Request $request){

        $slug = str_slug($request->name);

        $exists = Menu::getMenuBySlug($slug);

        if (!$exists) {
            $menu->name = $request->name;
            $menu->slug = $slug;
            $menu->update();

        } else {
            if ($exists->id == $menu->id) {
                $menu->name = $request->name;
                $menu->slug = $slug;
                $menu->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();

    }
    public function delete(Menu $menu){

        $menu->delete();

        Session::flash('Success', 'Successfully deleted');

        return back();
    }
}
