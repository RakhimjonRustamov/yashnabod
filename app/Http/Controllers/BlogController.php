<?php
namespace App\Http\Controllers;
use App\Post;
use DateTime;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['getNews', 'getSingleNews']]);
    }
    public  function getSingle($slug){
        $post=Post::where('slug', '=', $slug)->first();
        return view('blog.single')->withPost($post);
    }

    public function getNews(){
        $posts=Post::orderBy('id'. 'desc')->take(4);
        $post=Post::orderBy('id', 'desc')->take(1);
        return view('pages.news')->withPost($post)->withPosts($posts);
    }

    public function getSingleNews($slug){
        $posts=Post::orderBy('id', 'desc')->paginate(4);
        $post=Post::where('slug', '=', $slug)->first();
        return view('pages.news-single')->withPost($post)->withPosts($posts);
    }
}


