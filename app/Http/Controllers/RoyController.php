<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoyController extends Controller
{
    public function index()
    {
        return view('roy.index');
    }
    public function index_next()
    {
        return view('roy.index_next');
    }
}
