<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $date = ['message' => 'homePage'];
        return view('homepage', $date);
    }
}
