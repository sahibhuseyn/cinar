<?php

namespace App\Http\Controllers\Client;

use App\Edition;
use App\EditionCategory;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    public function editions(SubMenu $subMenu){

        $categories = $subMenu->editionCats;

        return view('client.edition.editions', compact( 'categories'));
    }

    public function edition(EditionCategory $category){
        $editions = $category->edition;

        return view('client.edition.edition', compact('editions'));

    }

    public function editionSingle($slug){

        $edition = Edition::editionBySlug($slug);

        return view('client.edition.single', compact('edition'));

    }

}
