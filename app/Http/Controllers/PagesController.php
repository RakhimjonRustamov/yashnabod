<?php
namespace App\Http\Controllers;
use Mail;
use Session;
use App\Post;
use App\Product;
use App\Resident;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function getAim(){
        return view('pages.aim');
    }

    public function getPreference(){
        return view('pages.preference-yic');
    }

    public function getStaff(){
        return view('pages.staff');
    }

    public function getBeresident(){
        return view('pages.beresident');
    }

    public function getPopularInfo(){
        return view('pages.popular');
    }

    public function getNormative(){
        return view('pages.normative');
    }

    public function getReception(){
        return view('pages.reception');
    }






    //Возможности
    public function getAreas(){
        return view('pages.areas');
    }

    public function getCopyRight(){
        return view('pages.copyright');
    }

    public function getCredits(){
        return view('pages.credits');
    }

    public function getPromotion(){
        return view('pages.promotion');
    }

    public function getSponsorship(){
        return view('pages.sponsorship');
    }

    public function getTaxes(){
        return view('pages.taxes');
    }
    //Возможности





    public function getReester(){
        return view('pages.reester');
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

    public function getZones(){
        return view('pages.zones');
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

    // Контакты
    public function postContact(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:120',
            'email' => 'required|email',
            'subject' => 'required|max:120',
            'message' => 'required|min:3'
        ));
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message
        );


        Mail::send('emails.contact', $data, function($message)use ($data){
            $message->from($data['email']);
            $message->to('omonibrokhimov96@gmail.com');
            $message->subject($data['subject']);
        });
        Session::flash('success', '  ваше письмо успешно отправлено');
        return redirect(route('contact'));
    }



    // search

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
