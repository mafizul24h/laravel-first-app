<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $name = "John Due";
        $email = "john@gmail.com";
        return view("dashboard.home", ['name' => $name, 'email' => $email]);
    }
    function sidebar()
    {
        $name = "John Due";
        $email = "john@gmail.com";
        return view("dashboard.sidebar.sidebar", compact("name", "email"));
    }
}
