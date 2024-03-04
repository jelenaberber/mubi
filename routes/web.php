<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
Route::get('/blog', [FrontController::class, "blog"])->name('blog');
Route::get('/movies', [FrontController::class, "movies"])->name('movies');
Route::post('/movies', [FrontController::class, "moviesFilter"]);
Route::get('/movies/{movie_id}', [FrontController::class, "movie"])->name('movie');
Route::get('/contact', [FrontController::class, "contact"])->name('contact');
Route::get('/about', [FrontController::class, "about"])->name('about');
Route::get('/logIn', [FrontController::class, "logInPage"])->name('logIn');
Route::get('/singUp', [FrontController::class, "singUp"])->name('singUp');
Route::post('/singUp', [FrontController::class, "registration"]);
Route::post('/logIn', [FrontController::class, "logIn"]);
Route::get('/logOut', [FrontController::class, "logOut"]) -> name('logOut');
