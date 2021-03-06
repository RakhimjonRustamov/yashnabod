<?php

namespace App\Http\Controllers;
use App\Counter;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $counter=Counter::orderBy('id', 'asc')->take(1)->get();
        return view('admin.dashboard ')->withCounter($counter);
    }

    public function edit($id)
    {
        $counter=Counter::find($id);
        return view('admin.edit')->withCounter($counter);
    }

    public function updateCounter(Request $request, $id){
        $this->validate($request, array (
            'counter1'=>'required',
            'counter2'=>'required',
            'counter3'=>'required',
            'counter4'=>'required',
            'counter5'=>'required'
        ));

        $count=Counter::find($id);
        $count->counter1=$request->counter1;
        $count->counter2=$request->counter2;
        $count->counter3=$request->counter3;
        $count->counter4=$request->counter4;
        $count->counter5=$request->counter5;
        $count->save();
        Session::flash('success', 'Счетчик обновлен');
        return redirect()->route('admin');
    }

















}
