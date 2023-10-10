<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function sayHello() {
        return "Bonjour M2i!";
    }

    public function sayHelloName(string $firstname) {
        return "Bonjour $firstname !";
    }
}
