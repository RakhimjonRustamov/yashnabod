<?php
namespace App\Http\Controllers;
use Image;
use Storage;
use Session;
use App\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $residents=Resident::orderBy('id', 'desc')->paginate(10);
        return view('residents.index')->withResidents($residents);
    }

    public function store(Request $request){
        $this->validate($request, array(
            'resident_name'=> 'required|max:100',
            'resident_info'=>'required|max:2000',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'

        ));
        $resident= new Resident;
        $resident->resident_info=$request->resident_info;
        $resident->resident_name=$request->resident_name;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $resident->resident_logo=$filename;
        }
        $resident->save();
        Session::flash('success', 'The resident was successfully saved');
        return redirect()->route('residents.index');
    }

    public function destroy($id)
    {
        $resident=Resident::find($id);
        $photo ='/'.$resident->resident_logo;
        Storage::delete($photo);
        $resident->delete();
        Session::flash('success', "The resident was successfully deleted");
        return redirect()->route('residents.index');
    }
}
