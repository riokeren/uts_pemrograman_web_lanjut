<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeControler extends Controller
{
    //Halaman Home
    public function index()
    {
        return view('home');
    }
}
