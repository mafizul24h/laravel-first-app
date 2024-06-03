<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function sayHello()
    {
        return "Hello World from Controller";
    }

    function courseName()
    {
        return "Laravel";
    }
}
