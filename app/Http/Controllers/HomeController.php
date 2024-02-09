<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home(){
        return view("home.home");
    }
    public function hometest(){
        return view("home.hometest");
    }
    public function test(){
        return view("home.test");
    }
    // public function slider(){
    //     return view("home.slider");
    // }
}
