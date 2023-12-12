<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $films = Movie::all();
        return view('guest.index', compact('films'));
    }

}
