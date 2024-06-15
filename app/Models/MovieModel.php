<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MovieModel extends Model
{
    use HasFactory;
    public function getAll(){
        $movies = DB::table('movies')->paginate(6);
        return $movies;
    }

    public function getMovie($id){
        $movie = DB::table('movies')
            ->join('directors', 'movies.director_id', '=', 'directors.id')
            ->join('languages', 'movies.language_id', '=', 'languages.id')
            ->select('movies.id as movie_id', 'movies.img_max', 'movies.name as movie', 'movies.original_name', 'movies.year', 'movies.duration', 'movies.sinopis', 'movies.our_take', 'movies.trailer', 'directors.name as director', 'languages.name as language')
            ->where('movies.id', '=', $id)
            ->first();


        return $movie;
    }

    public function watchlist($id){
        $onWatchlist = DB::table('watchlist')->where('user_id', '=', $id)->get();
        return $onWatchlist;
    }

    public function getCountries($id){
        $countries = DB::table('countries')
            ->join('movies_countries', 'countries.id', '=', 'movies_countries.country_id')
            ->where('movies_countries.movie_id', '=', $id)
            ->get();
        return $countries;
    }

    public function filterSearch($festivals, $genres, $search, $currentPage)
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
        $movies = $query->distinct()->paginate(6, ['*'], 'page', $currentPage);
        return $movies;
    }

    public function addToWatchlist($id, $user_id){
        $alreadyExists = DB::table('watchlist')->where('movie_id', '=', $id)
            ->where('user_id', '=', $user_id)->first();
        if($alreadyExists){
            $query = DB::table('watchlist')->where('movie_id', '=', $id)
                ->where('user_id', '=', $user_id)->delete();
            return 'delete';
        }
        else{
            $query = DB::table('watchlist')->insert([
                'user_id' => $user_id,
                'movie_id' => $id
            ]);
            return 'insert';
        }
    }

    public function rateAndReview($movieId, $rate, $review){
        $user = session()->get('user')->id;
        $query = DB::table('comments_movies')->insert([
            'movie_id' => $movieId,
            'user_id' => $user,
            'rate' => $rate,
            'text' => $review
        ]);
        return $query;
    }

    public function getReviews($movieId){
        return DB::table('comments_movies')->join('users', 'comments_movies.user_id', 'users.id')
            ->where('comments_movies.movie_id', '=', $movieId)->select( 'comments_movies.*', 'users.first_name', 'users.last_name', 'users.profile_img', 'users.id as user_id', 'comments_movies.rate')->get();
    }

    public function getRate($movieId){
        $averageRating = DB::table('comments_movies')->where('movie_id', $movieId)->avg('rate');
        $roundedRating = number_format($averageRating, 2);
        return $roundedRating;
    }

    public function getMoviesOnWatchlist($id){
        $movies = DB::table('movies as m')
            ->join('watchlist as w', 'm.id', '=', 'w.movie_id')
            ->where('w.user_id', $id)->get();
        return $movies;
    }

    public function deleteReview($reviewId){
        return DB::table('comments_movies')->where('comment_id', $reviewId)->delete();
    }

    public function latestReview(){
        $lastComment = DB::table('comments_movies')->latest()->first();
        return $lastComment;
    }

    public function getTopFiveMovies(){
        return DB::table('movies')
            ->select('movies.id', 'movies.name', 'movies.img_min', 'movies.year', DB::raw('COALESCE(AVG(comments_movies.rate), 0) as average_rate'))
            ->leftJoin('comments_movies', 'movies.id', '=', 'comments_movies.movie_id')
            ->groupBy('movies.id', 'movies.name', 'movies.img_min', 'movies.year')
            ->orderByDesc('average_rate')
            ->take(4)
            ->get();

    }
}
