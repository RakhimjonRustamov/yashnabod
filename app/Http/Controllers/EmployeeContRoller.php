<?php

namespace App\Http\Controllers;
use App\Employee;
use Session;
use Image;
use Storage;
use Illuminate\Http\Request;

class EmployeeContRoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees=Employee::orderBy('id', 'desc')->paginate(8);
        return view('employees.index')->withEmployees($employees);
    }
    public function store(Request $request){
        $this->validate($request, array(
            'full_name_uz'=> 'required|max:200',
            'full_name_ru'=> 'required|max:200',
            'position_uz'=>'required|max:500',
            'position_ru'=>'required|max:500',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $employee= new Employee;
        $employee->full_name_uz=$request->full_name_uz;
        $employee->position_uz=$request->position_uz;
        $employee->full_name_ru=$request->full_name_ru;
        $employee->position_ru=$request->position_ru;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/employees/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $employee->image=$filename;
        }
        $employee->save();
        Session::flash('success', 'Сотрудник был успешно сохранен');
        return redirect()->route('employees.index');
    }


    public function update(Request $request, $id){
        $this->validate($request, array(
            'full_name_uz'=> 'required|max:200',
            'full_name_ru'=> 'required|max:200',
            'position_uz'=>'required|max:500',
            'position_ru'=>'required|max:500',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $employee=Employee::find($id);
        $employee->full_name_uz=$request->full_name_uz;
        $employee->position_uz=$request->position_uz;
        $employee->full_name_ru=$request->full_name_ru;
        $employee->position_ru=$request->position_ru;

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/employees/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $oldFileName='/employees/'.$employee->image;
            // update the database
            $employee->image=$filename;
            Storage::delete($oldFileName);
        }
        $employee->save();
        Session::flash('success', 'Сотрудник был успешно обновлен');
        return redirect()->route('employees.index');
    }




    public function destroy($id)
    {
        $employee=Employee::find($id);
        $photo ='/employees/'.$employee->image;
        Storage::delete($photo);
        $employee->delete();
        Session::flash('success', "Сотрудник был успешно удален");
        return redirect()->route('employees.index');
    }



}
