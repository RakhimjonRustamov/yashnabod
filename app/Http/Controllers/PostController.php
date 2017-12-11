<?php

namespace App\Http\Controllers;
use Storage;
use Session;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title_uz'=> 'required|max:300',
            'title_ru'=> 'required|max:300',
            'body_uz'=>'required',
            'body_ru'=>'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $post = new Post;
        $post->title_uz=$request->title_uz;
        $post->title_ru=$request->title_ru;
        $post->body_uz=$request->body_uz;
        $post->body_ru=$request->body_ru;

        $slug = str_slug($post->title_uz, '-');
        $count = Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $post->slug = $count ? ($slug.'-'.$count) : $slug;

        // image upload to website

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/posts/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $post->image=$filename;
        }
        $post->save();
        Session::flash('success', 'The post was successfully saved');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.index')->withShowPost($post);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title_uz'=> 'required|max:300',
            'title_ru'=> 'required|max:300',
            'body_uz'=>'required',
            'body_ru'=>'required',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));
        // Save the data to the database
        $post=Post::find($id);
        $post->title_uz=$request->title_uz;
        $post->title_ru=$request->title_ru;
        $post->body_uz=$request->body_uz;
        $post->body_ru=$request->body_ru;

        $slug = str_slug($post->title_uz, '-');
        $count = Post::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $post->slug = $count ? ($slug.'-'.$count) : $slug;

        if($request->hasFile('featured_image')){
            // add the new photos
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/posts/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $oldFileName='/posts/'.$post->image;
            // update the database
            $post->image=$filename;

            Storage::delete($oldFileName);

        }
        $post->save();
        Session::flash('success', 'The post was successfully updated');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $photo ='/posts/'.$post->image;
        Storage::delete($photo);
        $post->delete();
        Session::flash('success', "The post was successfully deleted");
        return redirect()->route('posts.index');
    }
}
