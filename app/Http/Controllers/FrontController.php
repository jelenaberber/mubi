<?php

namespace App\Http\Controllers;


use App\Models\MovieModel;
use App\Models\ArticleModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class FrontController extends Controller
{
    private $movieModel;
    private $articleModel;

    public function __construct()
    {
        $this->movieModel = new MovieModel();
        $this->articleModel = new ArticleModel();
    }
    public function home(){
        $moviesTopFive = $this->movieModel->getTopFiveMovies();
        $ArticlesTopFive = $this->articleModel->topFiveArticle();
        return response()-> view('client.home', [
            'movies' => $moviesTopFive,
            'articles' => $ArticlesTopFive
        ]);
    }

    public function contact(){
    return view("client.contact");
    }

    public function about(){
        return view("client.about");
    }
}
