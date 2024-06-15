<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminArticleModel extends Model
{
    use HasFactory;
    public function newArticlesThisMonth(){
        return DB::table('articles')
            ->whereMonth('created_at', '=', now()->month)
            ->count();

    }
    public function newCommentsThisMonth(){
        return DB::table('comments_articles')
            ->whereMonth('created_at', '=', now()->month)
            ->count();
    }
    public function latestArticles(){
        return  DB::table('articles')
            ->join('users', 'articles.writer_id', '=', 'users.id')
            ->leftJoin('comments_articles', 'articles.id', '=', 'comments_articles.article_id')
            ->select(
                'articles.title',
                'articles.id as article_id',
                'users.first_name',
                'users.last_name',
                DB::raw('COALESCE(COUNT(comments_articles.id), 0) as comment_count')
            )
            ->groupBy('articles.title', 'articles.id', 'users.first_name', 'users.last_name', 'articles.created_at')
            ->orderBy('articles.created_at', 'desc')
            ->take(5)
            ->get();
    }

    public function getArticles(){
        return DB::table('articles')->where('articles.deleted_at', '=', null)
        ->join('users', 'articles.writer_id', '=', 'users.id')
            ->select('articles.title',
                'articles.id as article_id',
                'articles.created_at',
                DB::raw('CONCAT(users.first_name, " ", users.last_name) as full_name'))->get();
    }

    public function deleteArticle($id){
        return DB::table('articles')->where('id', $id)->update(['deleted_at' => now()]);
    }

    public function getArticle($id){
        return DB::table('articles')
            ->where('articles.id', '=', $id)
            ->join('users', 'articles.writer_id', '=', 'users.id')
            ->select('articles.*', DB::raw('CONCAT(users.first_name, " ", users.last_name) as full_name'), 'users.profile_img')
            ->first();
    }

    public function getComments($articleId){
        return DB::table('comments_articles')->where('article_id', $articleId)
            ->join('users', 'comments_articles.user_id', '=', 'users.id')
            ->select('comments_articles.*', DB::raw('CONCAT(users.first_name, " ", users.last_name) as full_name'), 'users.profile_img')
            ->get();
    }
}
