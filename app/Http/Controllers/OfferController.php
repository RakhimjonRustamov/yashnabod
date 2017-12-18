<?php

namespace App\Http\Controllers;
use Session;
use Storage;
use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'postOffer']);
    }

    public function index(){
        $offers=Offer::all();
        return view('offers.index')->withOffers($offers);

    }

    public function postOffer(Request $request){
        $this->validate($request, array(
            'name'=>'required|max:20',
            'surname'=>'required|max:20',
            'position'=>'required|max:300',
            'organization'=>'required|max:300',
            'region'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:9|numeric',
            'documents'=>'required|mimes:zip,rar|max:30720',
        ));

        $offer= new Offer;
        $offer->name=$request->name;
        $offer->surname=$request->surname;
        $offer->position=$request->position;
        $offer->organization=$request->organization;
        $offer->region=$request->region;
        $offer->email=$request->email;
        $offer->phone=$request->phone;

        if($request->hasFile('documents')){
            $file=$request->file('documents');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $request->documents->move(public_path('/images/offers'), $fileName);
            $offer->documents=$fileName;
        }
        $offer->save();
        Session::flash('success', 'Запрос был успешно сохранен');
        return redirect()->route('pages.request');
    }


    public function download($id){
        $offer=Offer::find($id);
        $filename=$offer->documents;
        return response()->download(public_path('/images/offers/'.$filename));
    }

    public function destroy($id)
    {
        $offer=Offer::find($id);
        $document='/offers/'.$offer->documents;
        Storage::delete($document);
        $offer->delete();
        Session::flash('success', "Запрос был успешно удален");
        return redirect()->route('offers.index');
    }


}
