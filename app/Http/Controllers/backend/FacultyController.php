<?php

namespace App\Http\Controllers\backend;
use App\Models\faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;

class FacultyController extends Controller

{
public function faculty(){

    $faculties=faculty::latest()->get();
    return view('backend.faculty.faculty',compact('faculties'));
}
public function store(Request $request){

    $validatedData = $request->validate([
        'fid'=>'required|string|unique:faculties,faculty_id',
        'fname'=>'required|string',
    ],[
        'fname.required'=>'Please Enter Faculty Name',
        'fid.required'=>'Please Enter Faculty Id',
        'fid.unique'=>'This field has already taken',

    ]);

    faculty::insert([
        'faculty_id'=>$request->fid,
        'faculty_name'=>$request->fname
    ]);

    $notification=array(
        'message' => ' Faculty Inserted',
         
           'alert-type' => 'success'
    
    );
    return redirect()->route('admin.addfaculty')->with($notification);
    

}

public function facultyedit($id){
$faculty=faculty::findorFail($id);
return view('backend.faculty.facultyedit',compact('faculty'));
}

public function facultyupdate(Request $request){

    $faculty= $request->id;


    $validatedData = $request->validate([
        
        'fname'=>'required|string',
        'fid'=>'required|string|unique:faculties,faculty_id,'.$faculty,
    

    ]);


   faculty::findorFail($faculty)->update([

    'faculty_id'=>$request->fid,
    'faculty_name'=>$request->fname,
   ]);


   $notification=array(
    'message' => ' Faculty Updated',
     
       'alert-type' => 'info'

);
return redirect()->route('admin.addfaculty')->with($notification);

}

public function facultydelete($id){
    $fac= faculty::findOrFail($id);

faculty::findOrFail($id)->delete();

$notification = array(
    'message' => 'Faculty deleted Successfully',
    'alert-type' => 'info'
 );
 return redirect()->route('admin.addfaculty')->with($notification);

}
}
