<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('rating', 'desc')
                    ->get();
        
        return view('movie/index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movie/show', compact('movie'));
    }
}
