<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class HomeController extends Controller
{
    public function index() {
        $artist = Artist::all();
        return view('home', compact('artist'));
    }
}
