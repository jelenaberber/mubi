<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminUserModel extends Model
{
    use HasFactory;
    public function newUsersThisMonth(){
        return DB::table('users')
            ->whereMonth('created_at', '=', now()->month)
            ->count();
    }

    public function latestUsers(){
        return  DB::table('users')
            ->whereBetween('created_at', [now()->subWeek(), now()])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function allUsers(){
        return DB::table('users')->where('deleted_at', '=', null)->
        join('roles', 'users.role_id', '=', 'roles.id')
            ->select('roles.name', DB::raw('CONCAT(users.first_name, " ", users.last_name) as full_name'), 'users.profile_img', 'users.created_at', 'users.email', 'users.username', 'users.id as user_id')
            ->get();
    }

    public function deleteUser($id){
        return DB::table('users')->where('id', $id)->update(['deleted_at' => now()]);
    }

    public function getRoles(){
        return DB::table('roles')->get();
    }

    public function setRole($roleId, $userId){
        return DB::table('users')->where('id', $userId)->update(['role_id' => $roleId]);
    }

}
