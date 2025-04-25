<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['genre', 'actors', 'reviews.user'])->get();
        return view('movies.index', compact('movies'));
    }
}

