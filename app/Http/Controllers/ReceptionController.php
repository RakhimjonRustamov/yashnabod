<?php

namespace App\Http\Controllers;
use Session;
use App\Reception;
use Illuminate\Http\Request;
class ReceptionController extends Controller
{
    public function __construct()    {
        $this->middleware('auth',['except'=>'postReception']);
    }

    public function index(){
        $receptions=Reception::orderBy('id', 'desc')->paginate(5);
        return view('receptions.index')->withReceptions($receptions);
    }

    // Записаться на прием в Дирекцию
    public function postReception(Request $request){
        $this->validate($request, array(
            'full_name'=>'required|max:400',
            'date_appointment'=>'required|date',
            'phone'=>'required|min:9|numeric',
            'email'=>'required|email',
            'project_info'=>'required'
        ));

        $reception= new Reception;
        $reception->full_name=$request->full_name;
        $reception->date_appointment=$request->date_appointment;
        $reception->phone=$request->phone;
        $reception->email=$request->email;
        $reception->project_info=$request->project_info;
        $reception->save();

        Session::flash('success', 'Прием был успешно отправлен');
        return redirect()->route('reception');
    }


    public function destroy($id){
        $reception=Reception::find($id);
        $reception->delete();
        Session::flash('success', "Прием был успешно удален");
        return redirect()->route('receptions.index');
    }















}
