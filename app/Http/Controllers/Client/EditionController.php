<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    public function editions(){

        return view('client.edition.editions');
    }
}
