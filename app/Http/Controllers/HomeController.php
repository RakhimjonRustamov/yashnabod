<?php
namespace App\Http\Controllers;
use App\Post;
use App\Product;
use App\Resident;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $residents=Resident::orderBy('id', 'desc')->take(6)->get();
        $products=Product::orderBy('id', 'desc')->paginate(4);
        $posts=Post::orderBy('id', 'desc')->paginate(6);
        return view('home')->withPosts($posts)->withProducts($products)->withResidents($residents);
    }
    public function downloadZip(){
        $docs=glob(public_path('documents/*'));
        \Zipper::make('thezippedfiles/templates.zip')->add($docs)->close();
        return response()->download(public_path('/thezippedfiles/templates.zip'));
    }
}
