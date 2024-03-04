<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GenreModel extends Model
{
    use HasFactory;
    public function getGenres($id){
        $genres = DB::table('genres')
            ->join('movies_genres', 'genres.id', '=', 'movies_genres.genre_id')
            ->where('movies_genres.movie_id', '=', $id)
            ->get();
        return $genres;
    }
    public function getAllGenres(){
        $allGenres = DB::table('genres')->get();
        return $allGenres;
    }
}
