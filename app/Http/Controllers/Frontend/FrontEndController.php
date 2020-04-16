<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // Front End Index Page
    public function index() {
        return view('frontend.index');
    }
}
