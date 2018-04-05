<?php

namespace App\Http\Controllers\Client;

use App\Edition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    public function editions(){

        $editions = Edition::getEdition();
        $categories = Edition::getEditionCat();

        return view('client.edition.editions', compact('editions', 'categories'));
    }

    public function editionSingle($slug){

        $edition = Edition::editionBySlug($slug);

        return view('client.edition.single', compact('edition'));

    }
}
