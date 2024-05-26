<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function addView()
    {
        return view('admin.add-blog');
    }
    public function store(Request $request)
    {
        $blogModel = new Blog();
        $title = $request->input('title');
        $content = $request->input('content');
        if (isset($title) && isset($content)) {
            $blogModel->store($title, $content);
            return redirect()->route('manage-blog');
        } else {
            return view('admin.add-blog');
        }
    }
    public function index()
    {
        $blogModel = new Blog();
        $blogs = $blogModel->getAllBlogs();
        return view('admin.manage-blog', compact('blogs'));
    }

    public function blogIndex()
    {
        $blogModel = new Blog();
        $blogs = $blogModel->getAllBlogs();
        return view('blog', compact('blogs'));
    }
    public function blogDetail($id)
    {
        $blogModel = new Blog();
        $blog = $blogModel->getBlogById($id);
        $commentModel = new Comment();
        $comments = $commentModel->getComments($id);
        return view('blog-details', compact('blog','comments'));
    }

    public function getComment(Request $request)
    {
        $commentModel = new Comment();
        $id = $request->input('blogId');
        $comment = $commentModel->getComment($id);
        return response()->json(['comment' => $comment]);
    }

    public function comment(Request $request)
    {
        $comment = new Comment();
        $content = $request->input('content');
        $blogId = $request->input('blogId');
        $comment->sendComment($content, $blogId);
        return response()->json(['success' => true]); 
    }
    public function delete($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }
        // Xoá sản phẩm
        $blog->delete();

        return redirect()->route('manage-blog');
    }
    public function edit($id){
        $blogModel = new Blog();
        $blog = $blogModel->getBlogById($id);
        return view('admin.edit-blog', compact('blog'));
    }
    public function updateBlog(Request $request){
        $blogModel = new Blog();
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');
        $blogModel->updateBlog($id,$title,$content);
        return redirect()->route('manage-blog');
    }
}
