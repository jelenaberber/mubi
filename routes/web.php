<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use \App\Http\Controllers\ArticlesController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\AdminMovieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, "home"])->name('home');
Route::get('/blog', [ArticlesController::class, "blog"])->name('blog');
Route::get('/blog/{id}', [ArticlesController::class, "singleArticle"])->name('article');
Route::get('/movies', [MovieController::class, "movies"])->name('movies');
Route::post('/movies', [MovieController::class, "moviesFilter"]);
Route::post('/movie/review/delete', [MovieController::class, "deleteReview"]);
Route::get('/movies/{movie_id}', [MovieController::class, "movie"])->name('movie');

Route::post('/movies/rate', [MovieController::class, "rateReview"])->name('rateReview');
Route::post('/article/comment', [ArticlesController::class, "comment"])->name('comment');
Route::post('/article/comment/delete', [ArticlesController::class, "deleteComment"])->name('deleteComment');


Route::get('/contact', [FrontController::class, "contact"])->name('contact');
Route::get('/about', [FrontController::class, "about"])->name('about');


Route::get('/logIn', [UserController::class, "logInPage"])->name('logIn');
Route::get('/singUp', [UserController::class, "singUp"])->name('singUp');
Route::post('/singUp', [UserController::class, "registration"]);
Route::post('/logIn', [UserController::class, "logIn"]);


Route::middleware(\App\Http\Middleware\IsLoggedIn::class)->group(function (){
    Route::get('/logOut', [UserController::class, "logOut"]) -> name('logOut');
    Route::get('/watchlist', [MovieController::class, "watchlist"]) -> name('watchlist');
    Route::post('/watchlistAdd', [MovieController::class, "addToWatchList"])->name('addToWatchlist');
});

Route::middleware(\App\Http\Middleware\IsAdmin::class)->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, "home"]) -> name('adminHome');
        Route::get('/users', [AdminController::class, "users"]) -> name('allUsers');
        Route::post('/user/delete', [AdminController::class, "deleteUser"]) -> name('deleteUser');
        Route::post('/user/change', [AdminController::class, "changeRole"]) -> name('changeRole');
        Route::get('/articles', [AdminController::class, "articles"]) -> name('allArticles');
        Route::post('/article/delete', [AdminController::class, "deleteArticle"]) -> name('deleteArticle');
        Route::get('/articles/{id}', [AdminController::class, "articleAndComments"]) -> name('articleAndComments');
        Route::resource('/movies', AdminMovieController::class)->names([
            'index' => 'movies.index',
            'destroy' => 'movies.delete',
            'show' => 'movies.show',
            'edit' => 'movies.edit',
            'update' => 'movies.update',
            'create' => 'movies.create',
            'store' => 'movies.store'
        ]);

    });
});
