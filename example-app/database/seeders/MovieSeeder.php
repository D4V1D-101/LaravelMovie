<?php

namespace Database\Seeders;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        Movie::create([
            'title' => 'The Shawshank Redemption',
            'director' => 'Frank Darabont',
            'release_year' => 1994,
            'genre' => 'Drama',
            'rating' => 9.3,
        ]);

        Movie::create([
            'title' => 'The Godfather',
            'director' => 'Francis Ford Coppola',
            'release_year' => 1972,
            'genre' => 'Crime',
            'rating' => 9.2,
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'director' => 'Christopher Nolan',
            'release_year' => 2008,
            'genre' => 'Action',
            'rating' => 9.0,
        ]);
    }
}
