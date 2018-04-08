<?php

namespace App\Http\Controllers\Client;

use App\Edition;
use App\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    public function editions( SubMenu $subMenu){

        $categories = Edition::getEditionCat();
        $editions = $subMenu->edition;

        return view('client.edition.editions', compact('editions', 'categories'));
    }

    public function editionSingle($slug){

        $edition = Edition::editionBySlug($slug);

        return view('client.edition.single', compact('edition'));

    }

}
