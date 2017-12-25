<?php

namespace App\Http\Controllers;
use Image;
use Session;
use Storage;
use App\Popularity;
use Illuminate\Http\Request;

class PopularityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $popularities=Popularity::orderBy('id', 'desc')->paginate(8);
        return view('popularity.index')->withPopularities($popularities);
    }

    public function store(Request $request){
        $this->validate($request, array(
            'popular_info_uz'=> 'required',
            'popular_info_ru'=> 'required',
            'link'=>'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $popularity= new Popularity;
        $popularity->popular_info_uz=$request->popular_info_uz;
        $popularity->popular_info_ru=$request->popular_info_ru;
        $popularity->link=$request->link;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/popular/'. $filename);
            Image::make($image)->save($location);
            $popularity->image=$filename;
        }
        $popularity->save();
        Session::flash('success', 'был успешно сохранен');
        return redirect()->route('popularity.index');
    }


    public function update(Request $request, $id){
        $this->validate($request, array(
            'popular_info_uz'=> 'required',
            'popular_info_ru'=> 'required',
            'link'=>'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $popularity=Popularity::find($id);
        $popularity->popular_info_uz=$request->popular_info_uz;
        $popularity->popular_info_ru=$request->popular_info_ru;
        $popularity->link=$request->link;


        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/popular/'. $filename);
            Image::make($image)->save($location);
            $oldFileName='/popular/'.$popularity->image;
            $popularity->image=$filename;

            Storage::delete($oldFileName);
        }
        $popularity->save();
        Session::flash('success', ' был успешно сохранен');
        return redirect()->route('popularity.index');
    }


    public function destroy($id)
    {
        $popularity=Popularity::find($id);
        $photo ='/popular/'.$popularity->image;
        Storage::delete($photo);
        $popularity->delete();
        Session::flash('success', " был успешно удален");
        return redirect()->route('popularity.index');
    }

}
