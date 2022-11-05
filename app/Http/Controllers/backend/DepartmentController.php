<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\faculty;
use App\Models\department;

class DepartmentController extends Controller
{
    //

    public function department(){

        $faculties=Faculty::orderBy('faculty_name','ASC')->get();
        $departments=department::latest()->get();
        return view('backend.department.department',compact('faculties','departments'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'department'=>'required|string|min:5|',
            'faculty_id'=>'required',
            'department_id'=>'required|unique:departments,department_id',
        ],[
            'department.required'=>'Please Enter Faculty Name',
            'faculty_id.required'=>'Please Enter Faculty Id',
            'department_code.unique'=>'This field has already taken',
            'department_code.required'=>'Please Enter Department id',

    
        ]);
        department::insert([
           'faculty_id'=>$request->faculty_id,
           'department_id'=>$request->department_id,
           'department_name'=>$request->department,
        ]);

        $notification=array(
            'message' => ' Department Inserted',
             
               'alert-type' => 'success'
        
        );
        return redirect()->route('admin.adddepartment')->with($notification);
        


    }
}
