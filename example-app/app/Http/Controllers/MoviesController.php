<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

use Illuminate\Http\JsonResponse;

class MoviesController extends Controller

{

    public function index(): JsonResponse

    {

        $movies = Movie::all();

        return response()->json($movies);

    }

}
