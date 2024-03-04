<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;
    public function loging($email, $password){
        $user = DB::table('users')->where('email', $email)->where('password', '=', $password)->first();

        if ($user) {
            return $user;
        }
        return false;
    }
    public function registration($user){
            $user = DB::table('users')->insert([$user]);
    }
}
