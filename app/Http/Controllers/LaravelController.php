<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class LaravelController extends Controller
{
    public function index(){
        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }
}
