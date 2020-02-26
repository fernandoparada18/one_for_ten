<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chief;
use App\Models\Patrol;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chief = Chief::count();
        $approved = Chief::where('approved', true)->count();
        $new = Chief::where('approved', false)->count();
        $patrols = Patrol::count();
        return view('home', compact('chief', 'approved', 'new', 'patrols'));
    }
}
