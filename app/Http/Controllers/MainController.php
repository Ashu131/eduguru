<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    Public function index(){
        return view('pages.index');
    }
}
