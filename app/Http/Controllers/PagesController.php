<?php
namespace App\Http\Controllers;
use App\Post;
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
        return view('pages.request');
    }


    public function postSearch(Request $request)
    {
        $posts = Post::search($request->search)->get();
        return view('search')->withPosts($posts);
    }

}
