<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }
    public function blog(){
        $articles = $this->articleModel->getArticles();
        return view("client.articles", ['articles' => $articles]);
    }

    public function singleArticle(Request $request){
        $id = $request->route('id');
        $article = $this->articleModel->getArticle($id);
        $comments = $this->articleModel->getComments($id);
        if (session()->get('user')){
            $user_id = session()->get('user')->id;
            return view("client.article", ['article' => $article, 'comments' => $comments, 'user_id' => $user_id]);
        }
        return view("client.article", ['article' => $article, 'comments' => $comments]);
    }

    public function comment(Request $request){
        try {
            $data = $request-> input('data');
            $rules = [
                'comment' => 'required|max:600',
            ];
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $articleId = $data['article_id'];
            $comment = $data['comment'];
            $commentArticle = $this->articleModel->comment($articleId, $comment);
            $user = session()->get('user');
            if($commentArticle){
                $comment = $this->articleModel->latestComment($articleId);
                return response()->json(array('comment'=> $comment, 'user' => $user), 200);
            }
        }catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function deleteComment(Request $request){
        try {
            $data = $request-> input('data');
            $commentId = $data['commentId'];
            $articleId = $data['article_id'];
            $delete = $this->articleModel->deleteComment($commentId);
            $comments = $this->articleModel->getComments($articleId);
            $commentNumber = count($comments);
            $user = session()->get('user');
            return response()->json(array('commentId'=> $commentId, 'user' => $user, 'article_id' => $articleId, 'commNum' => $commentNumber), 200);

        }catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }
}
