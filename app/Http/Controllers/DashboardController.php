<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article= DB::select('Select * FROM articles ORDER BY created_at DESC');
        // $user_id= Auth()->user()->id;
        // $user= User::find($user_id);
        return view('dashboard')->with('user_article', $article);
    }
}
