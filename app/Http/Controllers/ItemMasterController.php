<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemMasterController extends Controller
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
     * Show the ItemMasterList
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('itemMaster');
    }
}