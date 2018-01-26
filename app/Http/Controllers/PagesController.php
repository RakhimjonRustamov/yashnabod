<?php
namespace App\Http\Controllers;
use App\Document;
use App\Employee;
use Mail;
use Session;
use App\Post;
use App\Product;
use App\Popularity;
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
        $employees=Employee::all();
        return view('pages.staff')->withEmployees($employees);
    }

    public function getBeresident(){
        return view('pages.beresident');
    }

    public function getPopularInfo(){
        $popularities=Popularity::orderBy('id', 'desc')->paginate(8);
        return view('pages.popular')->withPopularities($popularities);
    }

    public function getNormative(){
        $normatives=Document::orderBy('id', 'asc')->take(6)->get();
        return view('pages.normative')->withNormatives($normatives);
    }

    public function downloadNormative($id){
        $normative=Document::find($id);
        $filename=$normative->name;
        return response()->download(public_path('normatives/'.$filename));
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
        $residents=Resident::orderBy('id', 'asc')->get();
        return view('pages.reester')->withResidents($residents);
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
        $products=Product::orderBy('id', 'desc')->paginate(8);
        return view('pages.products')->withProducts($products);
    }

    public function getResidents(){
        $residents=Resident::orderBy('id', 'desc')->paginate(8);
        return view('pages.residents')->withResidents($residents);
    }

    public function getSingleResident($id){
        $resident=Resident::find($id);
        return view('pages.getSingleResident')->withResident($resident);
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
            $message->to('info@yait.uz');
            $message->subject($data['subject']);
        });
        Session::flash('success', '  ваше письмо успешно отправлено');
        return redirect(route('contact'));
    }



    // search

    public function getSearch(Request $request){
        $posts = Post::where('title_uz', 'LIKE', "%$request->search%")
            ->orWhere('title_ru', 'LIKE', "%$request->search%")
            ->orWhere('body_uz', 'LIKE', "%$request->search%")
            ->orWhere('body_ru', 'LIKE', "%$request->search%")
            ->orWhere('slug', 'LIKE', "%$request->search%")
            ->orderBy('id', 'desc')
            ->paginate(8,['*'], 'posts');

        $products=Product::where('product_name_uz', 'LIKE', "%$request->search%")
            ->orWhere('product_name_ru', 'LIKE', "%$request->search%")
            ->orWhere('product_info_uz', 'LIKE', "%$request->search%")
            ->orWhere('product_info_ru', 'LIKE', "%$request->search%")
            ->orderBy('id', 'desc')
            ->paginate(8,['*'], 'products');

        $residents=Resident::where('resident_name_uz', 'LIKE', "%$request->search%")
            ->orWhere('resident_name_ru', 'LIKE', "%$request->search%")
            ->orWhere('ownership_uz')
            ->orWhere('ownership_ru')
            ->orWhere('resident_info_uz')
            ->orWhere('resident_info_ru')
            ->orderBy('id', 'desc')
            ->paginate(8, ['*'], 'residents');

        return view('search')
            ->withPosts($posts)
            ->withProducts($products)
            ->withResidents($residents);
    }

}
