<?php

namespace App\Http\Controllers\Client;

use App\Edition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    public function editions($edition){

        $categories = Edition::getEditionCat();
        $editions = Edition::getEditionByTypeId($edition);

        return view('client.edition.editions', compact('editions', 'categories'));
    }

    public function editionSingle($slug){

        $edition = Edition::editionBySlug($slug);

        return view('client.edition.single', compact('edition'));

    }

}
