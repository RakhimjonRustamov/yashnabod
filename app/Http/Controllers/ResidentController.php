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
            'reg_number'=>'required',
            'ownership_uz'=>'required',
            'ownership_ru'=>'required',
            'resident_name_uz'=> 'required',
            'resident_name_ru'=> 'required',
            'code'=>'required',
            'email'=>'required|email',
            'resident_info_uz'=> 'required',
            'resident_info_ru'=> 'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'

        ));
        $resident= new Resident;
        $resident->reg_number=$request->reg_number;
        $resident->ownership_uz=$request->ownership_uz;
        $resident->ownership_ru=$request->ownership_ru;
        $resident->resident_name_uz=$request->resident_name_uz;
        $resident->resident_name_ru=$request->resident_name_ru;
        $resident->code=$request->code;
        $resident->email=$request->email;
        $resident->resident_info_uz=$request->resident_info_uz;
        $resident->resident_info_ru=$request->resident_info_ru;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/residents/'. $filename);
            Image::make($image)->save($location);
            $resident->resident_logo=$filename;
        }
        $resident->save();
        Session::flash('success', ' Резидент был успешно сохранен');
        return redirect()->route('residents.index');
    }


    public function update(Request $request, $id){
        $this->validate($request, array(
            'reg_number'=>'required',
            'ownership_uz'=>'required',
            'ownership_ru'=>'required',
            'resident_name_uz'=> 'required',
            'resident_name_ru'=> 'required',
            'code'=>'required',
            'email'=>'required',
            'resident_info_uz'=> 'required',
            'resident_info_ru'=> 'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'


        ));
        $resident=Resident::find($id);
        $resident->reg_number=$request->reg_number;
        $resident->ownership_uz=$request->ownership_uz;
        $resident->ownership_ru=$request->ownership_ru;
        $resident->resident_name_uz=$request->resident_name_uz;
        $resident->resident_name_ru=$request->resident_name_ru;
        $resident->code=$request->code;
        $resident->email=$request->email;
        $resident->resident_info_uz=$request->resident_info_uz;
        $resident->resident_info_ru=$request->resident_info_ru;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/residents/'. $filename);
            Image::make($image)->save($location);
            $oldFileName='/residents/'.$resident->resident_logo;
            // update the database
            $resident->resident_logo=$filename;

            Storage::delete($oldFileName);
        }
        $resident->save();
        Session::flash('success', ' Резидент был успешно обновлен ');
        return redirect()->route('residents.index');
    }


    public function destroy($id)
    {
        $resident=Resident::find($id);
        $photo ='/residents/'.$resident->resident_logo;
        Storage::delete($photo);
        $resident->delete();
        Session::flash('success', " Резидент был удален");
        return redirect()->route('residents.index');
    }
}
