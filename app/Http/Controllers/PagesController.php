<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    
    public function students(){
        return view('100192.students');

    }

    public function fees(){
        return view('100192.fees');
    }

    public function home(){
        return view('welcome');
    }
}
