<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;

class LogoController extends Controller
{
    public function view(){
    	$logos = Logo::all();

    	return view('backend.logo.view-logo',compact('logos'));
    }

    public function add(){
    	

    	return view('backend.logo.add-logo');
    }

    public function store(Request $request){

    	  $this->validate($request,[
            'image'=>'required',
            
            
        ]);

    	  $logo = new Logo();

    	  if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ym').$file->getClientOriginalName();
          $file->move(public_path('upload/logoimage'), $filename);
          $logo['image'] = $filename;
        }
		$logo->save();

		return redirect()->route('logos.view')->with('success','Logo Added Successfully');

    }

    public function edit($id){
    	$editdata = Logo::find($id);

    	return view('backend.logo.edit-logo',compact('editdata'));
    }

    public function update(Request $request , $id){

    	$this->validate($request,[
            'image'=>'required',
            
            
        ]);

    	  $logo =  Logo::find($id);

    	  if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ym').$file->getClientOriginalName();
          $file->move(public_path('upload/logoimage'), $filename);
          $logo['image'] = $filename;
        }
		$logo->save();

		return redirect()->route('logos.view')->with('success','Logo Updated Successfully');
    }

    public function delete($id){

    	$logo= Logo::find($id);
    	       if (file_exists('upload/logoimage/' . $logo->image) AND !
                 empty($logo->image)){
                  unlink('upload/logoimage/' . $logo->image);
       }
        $logo->delete();
       return redirect()->route('logos.view')->with('success','Logo Deleted Successfully');
    }
}
