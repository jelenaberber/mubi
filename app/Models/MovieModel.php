<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MovieModel extends Model
{
    use HasFactory;
    public function getAll(){
        $movies = DB::table('movies')->get();
        return $movies;
    }

    public function getMovie($id){
        $movie = DB::table('movies')
            ->join('directors', 'movies.director_id', '=', 'directors.id')
            ->join('languages', 'movies.language_id', '=', 'languages.id')
            ->select('movies.img_max', 'movies.name as movie', 'movies.original_name', 'movies.year', 'movies.duration', 'movies.sinopis', 'movies.our_take', 'movies.trailer', 'directors.name as director', 'languages.name as language')
            ->where('movies.id', '=', $id)
            ->first();


        return $movie;
    }
    public function getCountries($id){
        $countries = DB::table('countries')
            ->join('movies_countries', 'countries.id', '=', 'movies_countries.country_id')
            ->where('movies_countries.movie_id', '=', $id)
            ->get();
        return $countries;
    }

    public function filterSearch($festivals, $genres, $search)
    {
        $query = DB::table('movies')->select('movies.*');
        if (!empty($genres)) {
            $query->join('movies_genres', 'movies.id', '=', 'movies_genres.movie_id')
                ->whereIn('movies_genres.genre_id', $genres);
        }
        if (!empty($festivals)) {
            $query->join('movies_festivals', 'movies.id', '=', 'movies_festivals.movie_id')
                ->whereIn('movies_festivals.festival_id', $festivals);
        }
        if (!empty($search)){
            $query->where('name', 'like', '%' . $search . '%');
        }

        $movies = $query->distinct()->get();
        return $movies;
    }

}
