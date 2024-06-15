<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminMovieModel extends Model
{
    use HasFactory;
    public function newReviewsThisMonth(){
        return DB::table('comments_movies')
            ->whereMonth('created_at', '=', now()->month)
            ->count();
    }

    public function recentlyAddedMovies(){
        return  DB::table('movies')
            ->leftJoin('comments_movies', 'movies.id', '=', 'comments_movies.movie_id')
            ->select(
                'movies.name',
                'movies.id as movies_id',
                DB::raw('COALESCE(COUNT(comments_movies.comment_id), 0) as comment_count'),
                DB::raw('COALESCE(ROUND(AVG(comments_movies.rate), 2), 0) as average_rate')
            )
            ->groupBy('movies.name', 'movies.id', 'movies.created_at')
            ->orderBy('movies.created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function getMovies(){
        return DB::table('movies')->where('deleted_at', '=', null)
            ->join('directors', 'movies.director_id', '=', 'directors.id')
            ->select('movies.name', 'movies.id','movies.original_name', 'movies.created_at', 'directors.name as director')->get();
    }

    public function deleteMovie($id){
        return DB::table('movies')->where('id', $id)->update(['deleted_at' => now()]);
    }

    public function getMovie($id){
        return DB::table('movies')
            ->join('directors', 'movies.director_id', '=', 'directors.id')
            ->join('languages', 'movies.language_id', '=', 'languages.id')
            ->select('movies.id as movie_id', 'movies.img_max', 'movies.name as movie', 'movies.original_name', 'movies.year', 'movies.duration', 'movies.sinopis', 'movies.our_take', 'movies.trailer', 'directors.name as director', 'languages.name as language', 'directors.id as director_id', 'languages.id as language_id', 'movies.img_min')
            ->where('movies.id', '=', $id)
            ->first();
    }

    public function getDirectors(){
        return DB::table('directors')->get();
    }

    public function getLanguages(){
        return DB::table('languages')->get();
    }

    public function getReviews($movieId){
        return DB::table('comments_movies')->join('users', 'comments_movies.user_id', 'users.id')
            ->where('comments_movies.movie_id', '=', $movieId)->select( 'comments_movies.*', 'users.first_name', 'users.last_name', 'users.profile_img', 'users.id as user_id')->get();
    }

    public function getRate($movieId){
        $averageRating = DB::table('comments_movies')->where('movie_id', $movieId)->avg('rate');
        $roundedRating = number_format($averageRating, 2);
        return $roundedRating;
    }

    public function getCountries($id){
        $countries = DB::table('countries')
            ->join('movies_countries', 'countries.id', '=', 'movies_countries.country_id')
            ->where('movies_countries.movie_id', '=', $id)
            ->get();
        return $countries;
    }

    public function updateMovie($id, $movie_to_update){
        return DB::table('movies')->where('id', $id)->update($movie_to_update);
    }

    public function insertMovie($movie){
        return DB::table('movies')->insert($movie);
    }
}
