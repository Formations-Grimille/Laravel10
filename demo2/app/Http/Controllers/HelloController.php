<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        return view('hello.world.home');
    }

    public function contact() {
        return view('hello.world.contact');
    }
}
