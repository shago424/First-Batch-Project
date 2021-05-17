<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;

class SliderController extends Controller
{
    public function view(){
    	$sliders =Slider::all();
    	return view('backend.slider.view-slider',compact('sliders'));
    }

    public function add(){
    	
    	return view('backend.slider.add-slider');
    }

    public function store(Request $request){

    	  $this->validate($request,[
    	  	'title' => 'required',
    	  	'description' => 'required',
    	  	'image'=>'required',
            
            
        ]);

    	  $slider = new Slider();
    	  $slider->title = $request->title;
    	  $slider->description = $request->description;

    	  if ($request->file('image')){
          $file = $request->file('image');
          // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ym').$file->getClientOriginalName();
          $file->move(public_path('upload/sliderimage'), $filename);
          $slider['image'] = $filename;
        }

		$slider->save();

		return redirect()->route('sliders.view')->with('success','Slider Added Successfully');
    }


      public function edit($id){
    	$editdata = Slider::find($id);
    	return view('backend.slider.edit-slider',compact('editdata'));
    }


    public function update(Request $request, $id){

    		  $this->validate($request,[
    	  	'title' => 'required',
    	  	'description' => 'required',
    	  	'image'=>'required',
            
            
        ]);

    	  $slider = Slider::find($id);
    	  $slider->title = $request->title;
    	  $slider->description = $request->description;

    	  if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('upload/sliderimage/'.$data->image));
          $filename =date('Ym').$file->getClientOriginalName();
          $file->move(public_path('upload/sliderimage'), $filename);
          $slider['image'] = $filename;
        }

		$slider->save();

		return redirect()->route('sliders.view')->with('success','Slider Updated Successfully');


    }

    public function delete($id){

    	$slider= Slider::find($id);
    	       if (file_exists('upload/sliderimage/' . $slider->image) AND !
                 empty($slider->image)){
                  unlink('upload/sliderimage/' . $slider->image);
       }
        $slider->delete();
       return redirect()->route('sliders.view')->with('success','Slider Deleted Successfully');
    }

    public function active($id){
       $slider = Slider::find($id); 
       $slider->status = 1; 
       $slider->save();

      return redirect()->route('sliders.view')->with('success','Slider Active Successfully');
    }

     public function inactive($id){
       $slider = Slider::find($id); 
       $slider->status = 0; 
       $slider->save();

      return redirect()->route('sliders.view')->with('success','Slider Inactive Successfully');
    }

}
