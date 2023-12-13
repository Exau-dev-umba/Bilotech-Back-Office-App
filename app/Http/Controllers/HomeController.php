<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Visites_articles;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalArticles =  Article::count();
        $totalUsers = User::count();
        $userTemp = User::where('temp', true)->count();
        $totalVisiteArticles = Visites_articles::count();

        return view('home', compact('totalArticles', 'totalUsers', 'userTemp', 'totalVisiteArticles'));
    }
}
