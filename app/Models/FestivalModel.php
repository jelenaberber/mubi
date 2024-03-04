<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class FestivalModel extends Model
{
    use HasFactory;
    public function getFestivals($id){
        $festivals = DB::table('festivals')->join('movies_festivals', 'festivals.id', '=', 'movies_festivals.festival_id')
            ->where('movies_festivals.movie_id', '=', $id)
            ->get();
        return $festivals;
    }
    public function getAllFestivals(){
        $allFestivals = DB::table('festivals')->get();
        return $allFestivals;
    }
}
