<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
        
    }

    public function rr(Request $request)
    {
        $url = $request->ips();
    //   if($request->bearerToken('post')){
    //     dd('true');
    //   } else {
    //    dd('false');
    //   }
    dd($url);

    }
}
