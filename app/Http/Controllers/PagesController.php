<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function article(){
        return view('pages.article');
    }

    public function discuss(){
        return view('pages.discuss');
    }

    public function locker(){
        return view('pages.locker');
    }

    public function job(){
        return view('pages.job');
    }

    public function connect(){
        return view('pages.connect');
    }
}
