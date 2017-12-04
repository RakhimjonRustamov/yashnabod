<?php
namespace App\Http\Controllers;
use App\Document;
use App\Post;
use Exception;
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
    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $section->addText($description);
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(public_path('helloWorld.docx'));
        } catch (Exception $e) {
        }
        return response()->download(public_path('helloWorld.docx'));
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
