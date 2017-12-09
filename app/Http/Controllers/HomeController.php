<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(6);
        return view('home')->withPosts($posts);
    }
    public function downloadZip(){
        $docs=glob(public_path('documents/*'));
        \Zipper::make('thezippedfiles/templates.zip')->add($docs)->close();
        return response()->download(public_path('/thezippedfiles/templates.zip'));
    }
}
