<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Student;
use Auth;

class StudentController extends Controller
{
   	public function view(){

		$students = Student::get();

		return view('backend.student.student-view',compact('students'));

	}

	public function add(){

		return view('backend.student.student-add');

	}

	public function store(Request $request){

		    $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:students,email',
            'mobile'=>'required',
            'address'=>'required',
            
        ]);

 
		$student = new Student();
		$student->name = $request->name;
		$student->email = $request->email;
		$student->mobile = $request->mobile;
		$student->address = $request->address;

		 if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/studentimage'), $filename);
          $student['image'] = $filename;
        }
		$student->save();

		return redirect()->route('students.view')->with('success','Student Added Successfully');

	}

    public function edit($id){
      $editdata = Student::find($id);
    return view('backend.student.student-edit',compact('editdata'));

  }
    public function update(Request $request, $id){

       $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            
        ]);

    $student = Student::find($id); 
    $student->name = $request->name;
    $student->email = $request->email;
    $student->mobile = $request->mobile;
    $student->address = $request->address;

     if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('upload/studentimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/studentimage'), $filename);
          $student['image'] = $filename;
        }
        $student->save();

    return redirect()->route('students.view')->with('success','Student Updated Successfully');

    }

    public function delete($id){
       $student = Student::find($id); 
                 if (file_exists('upload/studentimage/' . $student->image) AND !
                 empty($student->image)){
                  unlink('upload/studentimage/' . $student->image);
       }
            $student->delete();
            return redirect()->route('students.view')->with('success','Student Deleted Successfully');
    }

    public function active($id){
       $student = Student::find($id); 
       $student->status = 1; 
       $student->save();

      return redirect()->route('students.view')->with('success','Student Active Successfully');
    }

     public function inactive($id){
       $student = Student::find($id); 
       $student->status = 0; 
       $student->save();

      return redirect()->route('students.view')->with('success','Student Inactive Successfully');
    }

}


  // $logo = Logo::find($id);

  //         if (file_exists('public/upload/logoimage/' . $logo->image) AND !
  //         empty($logo->image)){
  //         unlink('public/upload/logoimage/' . $logo->image);
  //      }
  //           $logo->delete();
  //           return redirect()->route('images.logos.view')->with('success','Logo Deleted Successfully');

  //         } 