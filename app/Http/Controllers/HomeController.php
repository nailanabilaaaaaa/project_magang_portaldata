<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Data;
use Illuminate\Http\Request;
use Auth;

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
        $anggota   = Anggota::get();
        $data      = Data::get();
        
        return view('home', compact('anggota', 'data'));
    }
}
