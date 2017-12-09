<?php
namespace App\Http\Controllers;
use App\Post;
use DateTime;
use Illuminate\Http\Request;
use Zend\Validator\Date;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['getNews', 'getSingleNews']]);
    }
    public  function getSingle($slug){
        // fetch from the DB
        // passed post object
        $post=Post::where('slug', '=', $slug)->first();
        return view('blog.single')->withPost($post);
    }

    public function getNews(){
        return view('pages.news');
    }

    public function getSingleNews($slug){
        $posts=Post::orderBy('id', 'desc')->paginate(4);
        $post=Post::where('slug', '=', $slug)->first();
        return view('pages.news-single')->withPost($post)->withPosts($posts);
    }
}


