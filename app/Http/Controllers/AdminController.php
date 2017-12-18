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
        return view('admin.dashboard ');
    }

    public function counter(Request $request){
           $this->validate($request, array (
               'counter1'=>'required',
               'counter2'=>'required',
               'counter3'=>'required',
               'counter4'=>'required'
           ));

           $count = new Counter;
           $count->counter1=$request->counter1;
           $count->counter2=$request->counter2;
           $count->counter3=$request->counter3;
           $count->counter4=$request->counter4;
           $count->save();
           Session::flash('success', 'Счетчик сохранен');
           return redirect()->route('admin');
    }

    public function updateCounter(Request $request, $id){
        $this->validate($request, array (
            'counter1'=>'required',
            'counter2'=>'required',
            'counter3'=>'required',
            'counter4'=>'required'
        ));

        $count=Counter::find($id);
        $count->counter1=$request->counter1;
        $count->counter2=$request->counter2;
        $count->counter3=$request->counter3;
        $count->counter4=$request->counter4;
        $count->save();
        Session::flash('success', 'Счетчик обновлен');
        return redirect()->route('admin');
    }

















}
