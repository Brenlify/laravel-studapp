<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    public function getData(){
        return response()->json(Student::get(),200);
    }

    public function getDataByID($id){
        return response()->json(Student::find($id),200);
    }

    public function addData(Request $request){
        $student = Student::create($request->all());
        return response()->json($student,201);
    }  
    
    public function updateData(Request $request, Student $student){
            $student->update($request->all());
            return response()->json($student,200);
    }

    public function deleteData(Student $student){
        $student->delete();
        return response()->json(null,204);
    }



    /*
    Web Function
     */


     public function home(){
         $data = DB::select('SELECT * FROM students');
         return view ('welcome', ['student'=>$data]);
     }
}
