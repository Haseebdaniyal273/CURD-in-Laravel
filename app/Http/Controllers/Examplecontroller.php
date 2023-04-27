<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;     //Import model

class Examplecontroller extends Controller
{
    //

    public function examplefunction()
    {
       
        $student_=student::all();         //select * from students
        // dd($student_);    //dump and die()
        return view('dataviewform',compact('student_'));
       
    }

    public function insertDatatoDB(Request $req)
    {
//$_post['name'] ==> $req->name;

        $student_obj=new student;
        $student_obj->name=$req->name;
        $student_obj->ph=$req->ph;
        $student_obj->city=$req->city;

        $student_obj->save(); //Backend query insert into table students ('name','ph','city')values('umar',0312456,'lahore');
      
        $student_=student::all();
        return view('dataviewform',compact('student_'));

    }


    public function deletedata(Request $req)
    {
        $student_obj=student::findOrFail($req->id);
        $student_obj->delete();
        $student_=student::all();
        return view('dataviewform',compact('student_'));
    }

}
