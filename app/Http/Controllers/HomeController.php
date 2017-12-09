<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Zend\Validator\Date;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(6);
        return view('home')->withPosts($posts);
    }
}
