<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class MainController extends Controller
{
    public function index() {
        $abouts = About::all();
        return view('index', compact('abouts'));
    }
}
