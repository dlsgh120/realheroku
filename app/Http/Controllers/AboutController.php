<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
    public function explane(){
        return view('about_explane');
    }

    public function information(){
        return view('about_informaiton');
    }

    public function usingTec(){
        return view('about_usingTec');
    }
}
