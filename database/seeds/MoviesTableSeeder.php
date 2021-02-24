<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = config('moviesDB');

        foreach ($data as $movie) {
            $newMovie = new Movie();

            $newMovie->title = $movie['title'];
            $newMovie->director = $movie['director'];
            $newMovie->year = $movie['year'];
            $newMovie->genres = $movie['genres'];
            $newMovie->poster_name = $movie['poster_name'];

            $newMovie->save();
        }
    }
}
