<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\History;
use Auth;
use App\User;
class HistoryController extends Controller
{
   public function view(){
   	$histories = History::all();
   	return view('backend.history.view-history',compact('histories'));
   }

   public function add(){

   	return view('backend.history.add-history');
   }

   public function store(Request $request){

   	$this->validate($request,[
            'title'=>'required',
            'details'=>'required',
            'image'=>'required',
            
        ]);

 
		$history = new History();
		$history->title = $request->title;
		$history->details = $request->details;
		$history->created_by = Auth::user()->id ;

		 if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/historyimage'), $filename);
          $history['image'] = $filename;
        }
		$history->save();

		return redirect()->route('histories.view')->with('success','History Added Successfully');
   }

   public function edit($id){
   	$editdata = History::find($id);
   	return view('backend.history.edit-history',compact('editdata'));
   }

     public function update(Request $request,$id){

   	$this->validate($request,[
            'title'=>'required',
            'details'=>'required',
           
            
        ]);

 
		$history = History::find($id);
		$history->title = $request->title;
		$history->details = $request->details;
		$history->created_by = Auth::user()->id ;

		 if ($request->file('image')){
          $file = $request->file('image');
           @unlink(public_path('upload/historyimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/historyimage'), $filename);
          $history['image'] = $filename;
        }
		$history->save();

		return redirect()->route('histories.view')->with('success','History Updated Successfully');
   }

   public function delete($id){

    	$history= History::find($id);
    	       if (file_exists('upload/historyimage/' . $history->image) AND !
                 empty($history->image)){
                  unlink('upload/historyimage/' . $history->image);
       }
        $history->delete();
       return redirect()->route('histories.view')->with('success','History Deleted Successfully');
    }

    public function active($id){
       $history = History::find($id); 
       $history->status = 1; 
       $history->save();

      return redirect()->route('histories.view')->with('success','History Active Successfully');
    }

     public function inactive($id){
       $history = History::find($id); 
       $history->status = 0; 
       $history->save();

      return redirect()->route('histories.view')->with('success','History Inactive Successfully');
    }
}
