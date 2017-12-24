<?php
namespace App\Http\Controllers;
use App\Counter;
use App\Post;
use App\Product;
use App\Resident;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $counter=Counter::orderBy('id', 'asc')->take(1)->get();
        $residents=Resident::orderBy('id', 'desc')->take(6)->get();
        $products=Product::orderBy('id', 'desc')->take(8)->get();
        $posts=Post::orderBy('id', 'desc')->take(4)->get();
        return view('home')
            ->withPosts($posts)
            ->withProducts($products)
            ->withResidents($residents)
            ->withCounter($counter);
    }
    public function downloadZip(){
        $docs=glob(public_path('documents/*'));
        \Zipper::make('thezippedfiles/templates.zip')->add($docs)->close();
        return response()->download(public_path('/thezippedfiles/templates.zip'));
    }
}
