<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovie;
use App\Http\Requests\EditMovie;
use App\Models\GenreModel;
use App\Models\FestivalModel;
use Illuminate\Http\Request;
use App\Models\AdminMovieModel;
use App\Models\AdminUserModel;

class AdminMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $movieModel;
    private $userModel;
    private $genreModel;
    private $festivalModel;

    public function __construct()
    {
        $this->movieModel = new AdminMovieModel();
        $this->userModel = new AdminUserModel();
        $this->genreModel = new GenreModel();
        $this->festivalModel = new FestivalModel();
    }
    public function index()
    {
        $movies = $this->movieModel->getMovies();
        return response()-> view('admin.pages.movies', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = $this->movieModel->getLanguages();
        $directors = $this->movieModel->getDirectors();
        return response()-> view('admin.pages.newMovie', [
            'languages' => $languages,
            'directors' => $directors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovie $request)
    {
        $image_min_exists = $request->input('img_min');
        $image_max_exists = $request->input('img_max');
        $new_movie =  $request->except(['_method', '_token']);
        if(!$image_min_exists==null){
            $image = $request->file('img_min');
            $image_name = time() . "_" . uniqid() . "." . $image->extension();
            $image->storeAs('public/users', $image_name);
            $new_movie['img_min'] = $image_name;
        }
        else{
            $new_movie['img_min'] = 'avatar.webp';
        }
        if(!$image_max_exists==null){
            $image = $request->file('img_max');
            $image_name = time() . "_" . uniqid() . "." . $image->extension();
            $image->storeAs('public/users', $image_name);
            $new_movie['img_max'] = $image_name;
        }
        else{
            $new_movie['img_max'] = 'avatar.webp';
        }
        $insert = $this->movieModel->insertMovie($new_movie);
        if($insert){
            return redirect()->route('movies.index')->with('message', 'Movie inserted successfully');
        }
        else dd($insert);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie_id = $id;
        $movie = $this->movieModel->getMovie($movie_id);
        $countries = $this->movieModel->getCountries($movie_id);
        $genres = $this->genreModel->getGenres($movie_id);
        $festivals = $this->festivalModel->getFestivals($movie_id);
        $reviews = $this->movieModel->getReviews($movie_id);
        $rate = $this->movieModel->getRate($movie_id);
        return view("admin.pages.movie", ['movie' => $movie, 'genres'=>$genres, 'festivals'=>$festivals, 'countries'=>$countries, 'rate' => $rate, 'reviews' => $reviews] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = $this->movieModel->getMovie($id);
        $reviews = $this->movieModel->getReviews($id);
        $languages = $this->movieModel->getLanguages();
        $directors = $this->movieModel->getDirectors();
        return response()-> view('admin.pages.editMovie', [
            'movie' => $movie,
            'reviews' => $reviews,
            'directors' => $directors,
            'languages' =>$languages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditMovie $request, string $movie)
    {
        $image_min_exists = $request->input('img_min');
        $image_max_exists = $request->input('img_max');
        $movie_to_update =  $request->except(['_method', '_token']);
        if(!$image_min_exists==null){
            $image = $request->file('img_min');
            $image_name = time() . "_" . uniqid() . "." . $image->extension();
            $image->storeAs('public/users', $image_name);
            $movie_to_update['img_min'] = $image_name;
        }
        else{
            $movie_to_update['img_min'] = 'avatar.webp';
        }
        if(!$image_max_exists==null){
            $image = $request->file('img_max');
            $image_name = time() . "_" . uniqid() . "." . $image->extension();
            $image->storeAs('public/users', $image_name);
            $movie_to_update['img_max'] = $image_name;
        }
        else{
            $movie_to_update['img_max'] = 'avatar.webp';
        }
        $update = $this->movieModel->updateMovie($movie, $movie_to_update);
        if($update){
            return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
        }
        else dd($update);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $delete = $this->movieModel->deleteMovie($id);
            $movies = $this->movieModel->getMovies();
            return response()-> view('admin.pages.movies', [
                'movies' => $movies,
                'message' => 'Deleted successfully'
            ]);
        }catch (\Exception $E){

        }
    }
}
