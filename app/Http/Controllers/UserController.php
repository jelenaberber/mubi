<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogInRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\MovieModel;

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->movieModel = new MovieModel();
    }

    public function logInPage(){
        return view("client.login");
    }

    public function singUp(){
        return view("client.singUp");
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
                $user_to_insert['profile_img'] = 'avatar.webp';
            }
            $this->userModel->registration($user_to_insert);
            $request -> session()->put('user', $user_to_insert);
            return response()->redirectToRoute('home');
        }catch (\Exception $e){
            \log::error($e->getMessage());
            return response()->redirectToRoute('singUp');
            //napraviti rutu error
        }
    }

    public function logIn(LogInRequest $request){
        $email = $request -> input('email');
        $password = $request -> input('password');
        $user = $this->userModel-> loging($email, $password);
        try {
            if($user){
                $request -> session()->put('user', $user);
                $movieModel = new MovieModel();
                $watchlist = $movieModel->watchlist($user->id);
                $request ->session()->put('watchlist', $watchlist);
                if($user->role_id == 1){
                    return redirect() -> route('adminHome');
                }
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
}
