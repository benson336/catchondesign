<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }    

}
