<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminArticleModel;
use App\Models\AdminMovieModel;
use App\Models\AdminUserModel;

class AdminController extends Controller
{
    private $articleModel;
    private $movieModel;
    private $userModel;

    public function __construct()
    {
        $this->articleModel = new AdminArticleModel();
        $this->movieModel = new AdminMovieModel();
        $this->userModel = new AdminUserModel();
    }
    public function home(){
        $usersNum = $this->userModel->newUsersThisMonth();
        $articlesNum = $this->articleModel->newArticlesThisMonth();
        $commentsNum = $this->articleModel->newCommentsThisMonth();
        $reviewsNum = $this->movieModel->newReviewsThisMonth();
        $latestUsers = $this->userModel->latestUsers();
        $latestArticles = $this->articleModel->latestArticles();
        $recentlyAddedMovies = $this->movieModel->recentlyAddedMovies();
        return response()-> view('admin.pages.home', [
            'articlesNum' => $articlesNum,
            'usersNum' => $usersNum,
            'reviewsNum'=> $reviewsNum,
            'commentsNum'=> $commentsNum,
            'latestUsers' => $latestUsers,
            'latestArticles' => $latestArticles,
            'recentlyAddedMovies' => $recentlyAddedMovies
        ]);
    }

    public function users(){
        $allUsers = $this->userModel->allUsers();
        $roles = $this->userModel->getRoles();
        return response()-> view('admin.pages.users', [
            'users' => $allUsers,
            'roles' => $roles
        ]);
    }

    public function deleteUser(Request $request){
        $data = $request->input('data');
        $id = $data['userId'];
        try {
            $deleted = $this->userModel->deleteUser($id);
            return response()->json(['id' => $id], 200);
        }catch(\Exception $e){
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function changeRole(Request $request){
        $data = $request->input('data');
        $roleId = $data['roleId'];
        $userId = $data['userId'];
        try {
            $change = $this->userModel->setRole($roleId, $userId);
            return response()->json(['id' => $roleId], 200);
        }catch(\Exception $e){
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function articles(){
        $allArticles = $this->articleModel->getArticles();
        return response()-> view('admin.pages.articles', [
            'articles' => $allArticles
        ]);
    }

    public function deleteArticle(Request $request){
        $data = $request->input('data');
        $articleId = $data['articleId'];
        $deleted = $this->articleModel->deleteArticle($articleId);
        try {
            $deleted = $this->articleModel->deleteArticle($articleId);
            return response()->json(['id' => $articleId], 200);
        }catch(\Exception $e){
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function articleAndComments(Request $request){
        $id = $request->route('id');
        $article = $this->articleModel->getArticle($id);
        $comments = $this->articleModel->getComments($id);
        return response()-> view('admin.pages.article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
