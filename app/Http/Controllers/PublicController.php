<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function monsignor(){
        return view('themonsignors');
    }

    public function estate(){
        return view('theestate');
    }

    public function manor(){
        return view('themanor');
    }

    public function villa(){
        return view('thevilla');
    }

    public function whoweare(){
        return view('whoweare');
    }

    public function sustainability(){
        return view('sustainability');
    }

    public function mola(){
        return view('mola');
    }

    public function contact(){
        return view('contactus');
    }

    public function blog(){
        return view('blog');
    }
}
