<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function explane(){
        return view('about_explane');
    }

    public function information(){
        return view('about_informaiton');
    }

}
