<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Principal;
use Auth;
use App\User;

class PrincipalController extends Controller
{
    public function view(){

    	$principals = Principal::all();
    	return view('backend.principal.view-principal',compact('principals'));

    }

    public function add(){

    	return view('backend.principal.add-principal');

    }

    public function store(Request $request){

    	 $this->validate($request,[
            'name'=>'required',
            'degi'=>'required',
            'details'=>'required',
            'image'=>'required',
            
        ]);

 
		$principal = new Principal();
		$principal->name = $request->name;
		$principal->degi = $request->degi;
		$principal->details = $request->details;
		$principal->created_by =Auth::user()->id ;

		 if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/principalimage'), $filename);
          $principal['image'] = $filename;
        }
		$principal->save();

		return redirect()->route('principals.view')->with('success','Principal Added Successfully');
    }

     public function edit($id){
     	$editdata = Principal::find($id);
    	return view('backend.principal.edit-principal',compact('editdata'));

    }

     public function update(Request $request,$id){

    	 $this->validate($request,[
            'name'=>'required',
            'degi'=>'required',
            'details'=>'required',
            'image'=>'required',
            
        ]);

 
		$principal = Principal::find($id);
		$principal->name = $request->name;
		$principal->degi = $request->degi;
		$principal->details = $request->details;
		$principal->updated_by =Auth::user()->id ;

		 if ($request->file('image')){
          $file = $request->file('image');
            @unlink(public_path('upload/principalimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/principalimage'), $filename);
          $principal['image'] = $filename;
        }
		$principal->save();

		return redirect()->route('principals.view')->with('success','Principal Updated Successfully');
    }

     public function delete($id){

    	$principal= Principal::find($id);
    	       if (file_exists('upload/principalimage/' . $principal->image) AND !
                 empty($principal->image)){
                  unlink('upload/principalimage/' . $principal->image);
       }
        $principal->delete();
       return redirect()->route('principals.view')->with('success','Principal Deleted Successfully');
    }

    public function active($id){
       $principal = Principal::find($id); 
       $principal->status = 1; 
       $principal->save();

      return redirect()->route('principals.view')->with('success','Principal Active Successfully');
    }

     public function inactive($id){
       $principal = Principal::find($id); 
       $principal->status = 0; 
       $principal->save();

      return redirect()->route('principals.view')->with('success','Principal Inactive Successfully');
    }
}
