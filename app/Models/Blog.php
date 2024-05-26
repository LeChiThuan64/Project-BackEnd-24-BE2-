<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $table = 'blogs';
    public $timestamps = false;
    public function getAllBlogs(){
        return $this->all()->reverse();
    }
    public function getBlogById($id){
        return self::find($id);
    }
    public function store ($title, $content){
        $blog = new Blog();
        if(isset($content)){
            $blog->title = $title;
            $blog->content = $content;
            $blog->update_at = date('Y-m-d H:i:s');
            $blog->create_at = date('Y-m-d H:i:s');
            $blog->save();
            return $blog;
        }
        else{
            $blog->title = $title;
            $blog->content = 'nothing';
            $blog->update_at = date('Y-m-d H:i:s');
            $blog->create_at = date('Y-m-d H:i:s');
            $blog->save();
            return $blog;
        }
    }
    public function updateBlog($id, $title, $content){
        $blogModel = new Blog();
        $blog = $blogModel ->getBlogById($id);
         if ($blog) {
        $blog->title = $title;
        $blog->content = $content;
        $blog->update_at = date('Y-m-d H:i:s');
        return $blog->save();
    }  
    }
    public function remove()
    {
        return $this->delete();
    }
    use HasFactory;
}
