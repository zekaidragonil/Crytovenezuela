<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogControllers extends Controller
{
    public function index()
    {
        return view('blog');
    }
}
