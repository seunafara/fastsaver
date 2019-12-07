<?php

namespace App\Http\Controllers;

use App\FixedPlan;
use Illuminate\Support\Facades\Auth;

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

//        $fixedplans = FixedPlan::count()->where('user_id', );

        $fixedplans = FixedPlan::where('user_id',Auth::user()->id)->count();

        return view('home', compact('fixedplans'));

    }
}
