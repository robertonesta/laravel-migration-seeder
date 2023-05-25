<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }
    
}
