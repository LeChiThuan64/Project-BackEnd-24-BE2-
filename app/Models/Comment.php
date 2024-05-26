<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamps = false;
    public function sendComment($content,$blogId)
    {
        $comment  = new Comment();
        if (isset($content)) {
            $comment->content = $content;
            $comment->user_name= session('user_name');
            $comment->blog_id= $blogId;
            $comment->create_at = date('Y-m-d H:i:s');
            $comment->save();
            return $comment;
        } 
    }
    public function getComments($blogId)
    {
        $comments = Comment::select('id', 'content', 'user_name', 'blog_id', 'create_at')
        ->where('blog_id', $blogId)
        ->get();
     
        return $comments;
    }
    public function getComment($blogId)
    {
        $comment = Comment::select('id', 'content', 'user_name', 'blog_id', 'create_at')
        ->where('blog_id', $blogId)
        ->orderByDesc('id')
        ->limit(1)
        ->get()
        ->reverse();
    
        return $comment[0];
    }
    use HasFactory;
}
