<?php

namespace App\Http\Controllers;

use App\kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
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
        $kampus = kampus::all();
        return view('kampus', ['kampus'=>$kampus]);
    }
}
