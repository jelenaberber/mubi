<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRateRequest;
use App\Models\FestivalModel;
use App\Models\GenreModel;
use App\Models\MovieModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;


class MovieController extends Controller
{
    private $userModel;
    private $movieModel;
    private $genreModel;
    private $festivalModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->movieModel = new MovieModel();
        $this->genreModel = new GenreModel();
        $this->festivalModel = new FestivalModel();
    }

    public function movies(){
        $movies = $this->movieModel->getAll();
        $genres = $this->genreModel->getAllGenres();
        $festivals = $this->festivalModel->getAllFestivals();
        return response()-> view('client.movies', [
            'movies' => $movies,
            'genres' => $genres,
            'festivals'=> $festivals
        ]);
    }

    public function moviesFilter(Request $request){
        $data = $request->input('data');
        $festivals = isset($data['festivals']) ? $data['festivals'] : [];
        $genres = isset($data['genres']) ? $data['genres'] : [];
        $search = isset($data['search']) ? $data['search'] : '';
        $currentPage = isset($data['page']) ? $data['page'] : 1;
        $movies = $this->movieModel->filterSearch($festivals, $genres, $search, $currentPage);
        return response()->json(array('movies'=> $movies, 'festivals' => $festivals, 'genres' => $genres, 'search' => $search), 200);
    }

    public function movie(Request $request){
        $movie_id = $request->route('movie_id');
        $movie = $this->movieModel->getMovie($movie_id);
        $countries = $this->movieModel->getCountries($movie_id);
        $genres = $this->genreModel->getGenres($movie_id);
        $festivals = $this->festivalModel->getFestivals($movie_id);
        $reviews = $this->movieModel->getReviews($movie_id);
        $rate = $this->movieModel->getRate($movie_id);
        $user = session()->get('user');

        if ($user) {
            $watchlist = $this->movieModel->watchlist($user->id);

            // Provera da li $watchlist nije null i nije prazan niz
            if ($watchlist !== null && is_array($watchlist)) {
                $exists = in_array($movie_id, $watchlist);
            } else {
                $exists = false;
                $watchlist = [];
            } return view("client.movie", ['movie' => $movie, 'genres'=>$genres, 'festivals'=>$festivals, 'countries'=>$countries, 'exists'=>$exists, 'rate' => $rate, 'reviews' => $reviews] );
        }
        return view("client.movie", ['movie' => $movie, 'genres'=>$genres, 'festivals'=>$festivals, 'countries'=>$countries, 'rate' => $rate, 'reviews' => $reviews] );
    }

    public function rateReview(Request $request){
        try {
            $data = $request-> input('data');
            $user = session()->get('user');
            $rules = [
                'review' => 'required|max:600',
                'rate' => 'required|numeric|min:1',
            ];
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $movieId = $data['movieId'];
            $rate = $data['rate'];
            $review = $data['review'];
            $rateAndReview = $this->movieModel->rateAndReview($movieId, $rate, $review);
            if($rateAndReview){
                $review = $this->movieModel->latestReview();
                $avgRate = $this->movieModel->getRate($movieId);
                return response()->json(array('review' => $review, 'avgRate' => $avgRate, 'user' =>$user, 'movie_id' => $movieId), 200);
            }
        }catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function addToWatchlist(Request $request){
        $data = $request->input('data');
        $id = $data['movieId'];
        $user_id = session()->get('user')->id;
        $addMovie = $this->movieModel->addToWatchlist($id, $user_id);
        if($addMovie == 'insert'){
            return response()->json(array('response'=> 'insert'), 200);
        }
        if($addMovie == 'delete'){
            return response()->json(array('response'=> 'delete'), 200);
        }

    }

    public function watchlist(){
        $userId = session()->get('user')->id;
        $watchlist = $this->movieModel->getMoviesOnWatchlist($userId);
        return view("client.watchlist", ['movies' => $watchlist] );
    }

    public function deleteReview(Request $request){
        try {
            $data = $request-> input('data');
            $reviewId = $data['reviewId'];
            $movieId = $data['movieId'];
            $delete = $this->movieModel->deleteReview($reviewId);
            $user_id = session()->get('user')->id;
            return response()->json(array( 'reviewId' => $reviewId), 200);

        }catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }
}
