<?php

namespace App\Http\Controllers;

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
        return view('theme/home');
    }
	public function deposit()
    {
        return view('theme/deposit');
    }
	public function withdraw()
    {
        return view('theme/withdraw');
    }
	public function send()
    {
        return view('theme/send');
    }
	public function crypto()
    {
        return view('theme/crypto');
    }
	public function setting()
    {
        return view('theme/setting');
    }
}
