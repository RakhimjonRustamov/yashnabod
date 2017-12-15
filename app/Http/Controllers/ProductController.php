<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'productsIndex']);
    }

    // this index function display all products to admin panel
    public function index()
    {
        $products=Product::orderBy('id', 'desc')->paginate(8);
        return view('products.index')->withProducts($products);
    }


    // this index function display all products to home page
    public function productsIndex(){

    }

    public function store(Request $request){
        $this->validate($request, array(
            'product_name_uz'=> 'required',
            'product_name_ru'=> 'required',
            'product_info_uz'=>'required',
            'product_info_ru'=>'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $product= new Product;
        $product->product_info_uz=$request->product_info_uz;
        $product->product_name_uz=$request->product_name_uz;
        $product->product_info_ru=$request->product_info_ru;
        $product->product_name_ru=$request->product_name_ru;


        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $product->product_image=$filename;
        }
        $product->save();
        Session::flash('success', ' Продукт был успешно сохранен');
        return redirect()->route('products.index');
    }

    public function update(Request $request, $id){
    $this->validate($request, array(
        'product_name_uz'=> 'required',
        'product_name_ru'=> 'required',
        'product_info_uz'=>'required',
        'product_info_ru'=>'required',
        'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
    ));

    $product=Product::find($id);
    $product->product_info_uz=$request->product_info_uz;
    $product->product_name_uz=$request->product_name_uz;
    $product->product_info_ru=$request->product_info_ru;
    $product->product_name_ru=$request->product_name_ru;


    if($request->hasFile('featured_image')){
        $image=$request->file('featured_image');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location=public_path('images/products/'. $filename);
        Image::make($image)->resize(800,400)->save($location);
        $oldFileName='/products/'.$product->product_image;

        $product->product_image=$filename;

        Storage::delete($oldFileName);
    }
    $product->save();
    Session::flash('success', ' Продукт был успешно сохранен');
    return redirect()->route('products.index');
}


    public function destroy($id)
    {
        $product=Product::find($id);
        $photo ='/products/'.$product->product_image;
        Storage::delete($photo);
        $product->delete();
        Session::flash('success', " Продукт был успешно удален");
        return redirect()->route('products.index');
    }

}
