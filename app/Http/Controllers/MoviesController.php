<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index() {
        return view('home');
    }

    public function getMovie() {
        $movies = Movie::all();
        dump($movies);
    }
}
