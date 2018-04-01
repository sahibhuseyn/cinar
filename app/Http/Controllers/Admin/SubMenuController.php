<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SubMenuController extends Controller
{
    public function show(){

        $subMenus = SubMenu::getSubMenu();
        $menus = Menu::getMenu();
        $menu = Menu::all()->load('submenu');

        return view('admin.sub-menu.submenu',  compact('subMenus', 'menus', 'menu'));
    }

    public function edit(SubMenu $subMenu){

        $menus = Menu::getMenu();

        return view('admin.sub-menu.single', compact('subMenu', 'menus'));
    }

    public function add(Request $request){

        $slug = str_slug($request->name);

        $exists = SubMenu::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Menu with the same name already exists');

            return back();
        }


        $suMenu = new SubMenu;
        $suMenu->name = $request->name;
        if ($request->parent_id != '-') {
            $suMenu->menu_id = $request->parent_id;
        }else{
            Session::flash('fail', 'Please select main menu');

            return back();
        }
        $suMenu->slug = $slug;

        $suMenu->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update(SubMenu $subMenu, Request $request){

        $slug = str_slug($request->name);

        $exists = SubMenu::where('slug', $slug)->first();

        if (!$exists) {
            $subMenu->name = $request->name;
            $subMenu->slug = $slug;
            $subMenu->update();

        } else {
            if ($exists->id == $subMenu->id) {
                $subMenu->name = $request->name;
                $subMenu->slug = $slug;
                $subMenu->menu_id = $request->menu_id;
                $subMenu->update();

            } else if ($exists) {
                Session::flash('fail', 'Menu with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete(SubMenu $subMenu){

        $subMenu->delete();

        Session::flash('Success', 'Successfully deleted');

        return back();

    }
}
