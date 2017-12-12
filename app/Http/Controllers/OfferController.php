<?php

namespace App\Http\Controllers;
use Session;
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
            'position'=>'required|max:100',
            'organization'=>'required|max:120',
            'region'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:9|numeric',
            'documents'=>'required|mimes:zip,rar|size:max:16000',
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
            $request->documents->move(public_path('/offers'), $fileName);
            $offer->documents=$fileName;
        }
        $offer->save();
        Session::flash('success', 'The offer was successfully saved');
        return redirect()->route('pages.request');
    }

}
