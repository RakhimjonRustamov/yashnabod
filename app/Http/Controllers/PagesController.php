<?php
namespace App\Http\Controllers;
use App\Document;
use App\Post;
use App\Product;
use App\Resident;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function getPreference(){
        return view('pages.preference-yic');
    }

    public function getNews(){
        return view('pages.news');
    }

    public function getCoordination(){
        return view('pages.coordinated-consulting');
    }

    public function getInstruction(){
        return view('pages.how-to-join');
    }

    public function getQuestions(){
        return view('pages.questions');
    }

    public function getProducts(){
        return view('pages.products');
    }

    public function getResidents(){
        return view('pages.residents');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getRequest(){
        $downloads=Document::all();
        return view('pages.request')->withDownloads($downloads);
    }

    public function getSearch(Request $request){
    $posts = Post::where('title', 'LIKE', "%$request->search%")
        ->orWhere('body', 'LIKE', "%$request->search%")
        ->orWhere('slug', 'LIKE', "%$request->search%")
        ->orderBy('id', 'desc')
            ->paginate(8,['*'], 'posts');

    $products=Product::where('product_name', 'LIKE', "%$request->search%")
        ->orWhere('product_info', 'LIKE', "%$request->search%")
        ->orderBy('id', 'desc')
        ->paginate(8,['*'], 'products');

    $residents=Resident::where('resident_name', 'LIKE', "%$request->search%")
        ->orderBy('id', 'desc')
        ->paginate(8, ['*'], 'residents');

    return view('search')
        ->withPosts($posts)
        ->withProducts($products)
        ->withResidents($residents);
    }

}
