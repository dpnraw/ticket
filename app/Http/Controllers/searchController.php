<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\route;
use Illuminate\Support\Facades\Input;

class searchController extends Controller
{
    
    public function search(){

    $q = Input::get ( 'q' );
    $route = route::where('from','LIKE','%'.$q.'%')->orWhere('to','LIKE','%'.$q.'%')->get();
    if(count($route) > 0)
        return view('search')->withDetails($route)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
    }
    
   
}
