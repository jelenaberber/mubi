<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use App\Models\FestivalModel;
use App\Models\GenreModel;
use Illuminate\Http\Request;
use App\Models\UserModel;
use  App\Http\Requests\LogInRequest;
use  App\Http\Requests\RegistrationRequest;
use function Laravel\Prompts\select;

class FrontController extends Controller
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

    public function home(){
        return view("client.home");
    }
    public function blog(){
        return view("client.blog");
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
        $movies = $this->movieModel->filterSearch($festivals, $genres, $search);
        return response()->json(array('movies'=> $movies), 200);
    }

    public function movie(Request $request){
        $movie_id = $request->route('movie_id');
        $movie = $this->movieModel->getMovie($movie_id);
        $countries = $this->movieModel->getCountries($movie_id);
        $genres = $this->genreModel->getGenres($movie_id);
        $festivals = $this->festivalModel->getFestivals($movie_id);
        return view("client.movie", ['movie' => $movie, 'genres'=>$genres, 'festivals'=>$festivals, 'countries'=>$countries] );
    }

    public function contact(){
    return view("client.contact");
    }
    public function about(){
        return view("client.about");
    }
    public function logInPage(){
        return view("client.login");
    }
    public function singUp(){
        return view("client.singUp");
    }

    public function logIn(LogInRequest $request){
        $email = $request -> input('email');
        $password = $request -> input('password');
        $user = $this->userModel-> loging($email, $password);
        try {
            if($user){
                $request -> session()->put('user', $user);
                return redirect() -> route('home');
            }
            else{
                return view('client.login');
            }
        }catch (\Exception $e){
            return $e;
        }
    }

    public function logOut(Request $request){
        $request -> session() -> remove('user');
        return redirect() -> route('home');
    }

    public function registration(RegistrationRequest $request){
        try{
            $image_exists = $request->input('profile_img');

            if(!$image_exists==null){
                $image = $request->file('profile_img');
                $image_name = time() . "_" . uniqid() . "." . $image->extension();
                $image->storeAs('public/users', $image_name);
                $user_to_insert = $request->all();
                $user_to_insert['profile_img'] = $image_name;
            }
            else{
                $user_to_insert = $request->all();
                $user_to_insert['profile_img'] = 'avatar.jpg';
            }
            $this->userModel->registration($user_to_insert);
            $request -> session()->put('user', $user_to_insert);
            return response()->redirectToRoute('home');
        }catch (\Exception $e){
//            \log::error($e->getMessage());
            return response()->redirectToRoute('singUp');
            //napraviti rutu error
        }
    }
}
