<?php

namespace App\Http\Controllers;
use Storage;
use Session;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products=Product::orderBy('id', 'desc')->paginate(8);
        return view('products.index')->withProducts($products);
    }
    public function store(Request $request){
        $this->validate($request, array(
            'product_name'=> 'required|max:100',
            'product_info'=>'required|max:500',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $product= new Product;
        $product->product_info=$request->product_info;
        $product->product_name=$request->product_name;


        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $product->product_image=$filename;
        }
        $product->save();
        Session::flash('success', 'The product was successfully saved');
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product=Product::find($id);
        $photo ='/'.$product->product_image;
        Storage::delete($photo);
        $product->delete();
        Session::flash('success', "The product was successfully deleted");
        return redirect()->route('products.index');
    }

}
