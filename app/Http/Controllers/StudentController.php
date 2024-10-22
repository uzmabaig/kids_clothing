<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
    $students = Student::get();
    return view('student.index', ['data' => $students]);
  }
  
  public function add(Request $request)
  {
    if ($request->method() === 'POST') {
      
      $students = Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'course' => $request->course,
        'phonenumber' => $request->phonenumber,
      ]);
      
      if ($students) {
        return redirect()->back()->with('success', 'Student added successfully!');
      } else {
        return back()->with('error', 'Student not added!');
      }
    }
  }
  
  
  public function edit($id)
  {
    $students = Student::find($id);
    return response()->json([
      'status'=> 200,
      'data'=>$students,
    ]);
  }
  
  public function update(Request $request)
  {
    $stud_id = $request->stud_id;
    $students = Student::find($stud_id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'course' => $request->course,
      'phonenumber' => $request->phonenumber,
    ]);
    
    if ($students) {
      return redirect()->back()->with('success', 'Student updated successfully!');
    } else {
      return back()->with('error', 'Student not updated!');
    }
    
    
  }
  
  
  
  
}
