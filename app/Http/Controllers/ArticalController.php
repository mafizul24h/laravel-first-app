<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    function index($id=1)
    {
        return "Artical ID= " . $id;
    }

/*     function showArticels($pageNumber) {
        $perPage = request()->input("perPage", 10);
        $sort = request()->input("sort","desc");

        return ("Page Numbers = ".$pageNumber."Par Page=  ". $perPage." Date = ".$sort."");
    } */
    function showArticels($pageNumber, Request $request) {
        $perPage = $request->input("perPage", 10);
        $sort = $request->input("sort","desc");

        return ("Page Numbers = ".$pageNumber."Par Page=  ". $perPage." Date = ".$sort."");
    }
}
