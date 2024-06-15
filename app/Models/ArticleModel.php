<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ArticleModel extends Model
{
    use HasFactory;

    public function getArticles(){
        return DB::table('articles')->join('users', 'articles.writer_id', '=', 'users.id')->whereNull('articles.deleted_at')
            ->select('articles.id as article_id', 'articles.created_at', 'articles.img_min', 'articles.title','users.first_name', 'users.last_name', 'users.profile_img', DB::raw('LEFT(articles.text, 150) as truncated_text'))->get();
    }

    public function getArticle($id){
        return DB::table('articles')->whereNull('articles.deleted_at')
            ->where('articles.id', '=', $id)->join('users', 'articles.writer_id', '=', 'users.id')->select('articles.*', 'users.first_name', 'users.last_name', 'users.profile_img')->first();
    }

    public function comment($articleId, $comment){
        $user_id = session()->get('user')->id;
        return DB::table('comments_articles')->insert([
            'article_id' => $articleId,
            'user_id' => $user_id,
            'text' => $comment
        ]);
    }

    public function getComments($article_id){
        return DB::table('comments_articles')->join('users', 'comments_articles.user_id', '=', 'users.id')->where('article_id', '=', $article_id)
            ->select('comments_articles.text', 'comments_articles.created_at', 'comments_articles.id as comment_id', 'users.first_name', 'users.last_name', 'users.profile_img', 'users.id as user_id')->get();
    }

    public function deleteComment($id){
        return DB::table('comments_articles')->where('id', $id)->delete();
    }

    public function latestComment(){
        $lastComment = DB::table('comments_articles')->latest()->first();
        return $lastComment;
    }

    public function topFiveArticle(){
        return DB::table('articles')->where('deleted_at', '=', null)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    }
}
