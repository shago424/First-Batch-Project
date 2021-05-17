<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function view(){
    	$posts =Post::orderBy('id','DESC')->get();

    	return view('backend.post.view-post',compact('posts'));
    }

    public function add(){
    	$categories = Category::where('status',1)->get();
    	return view('backend.post.add-post',compact('categories'));
    }

    public function store(Request $request){

     $this->validate($request,[
            'short_title'=>'required',
            'post_title'=>'required',
            'post_details'=>'required',
            'category_id'=>'required',
            'post_date'=>'required',
            
        ]);

     $post = new Post();
     $post->category_id = $request->category_id;
     $post->post_title = $request->post_title;
     $post->post_slug = $this->slug_generator($request->post_title);
     $post->short_title = $request->short_title;
     $post->post_details = $request->post_details;
     $post->post_date = $request->post_date;

     if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('YmdH').$file->getClientOriginalName();
          $file->move(public_path('upload/postimage'), $filename);
          $post['image'] = $filename;
        }

        if ($request->file('post_file')){
          $file = $request->file('post_file');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('YmdH').$file->getClientOriginalName();
          $file->move(public_path('upload/postfile'), $filename);
          $post['post_file'] = $filename;
        }

        $post->save();

        return redirect()->route('posts.view')->with('success','Post Added Successfully');
	}

   public function edit($id){
      $editdata = Post::find($id);
      $categories = Category::where('status',1)->get();
      return view('backend.post.edit-post',compact('categories','editdata'));
    }


  public function update(Request $request,$id){

    $this->validate($request,[
            'short_title'=>'required',
            'post_title'=>'required',
            'post_details'=>'required',
            'category_id'=>'required',
            'post_date'=>'required',
            
        ]);

     $post = Post::find($id);
     $post->category_id = $request->category_id;
     $post->post_title = $request->post_title;
     $post->post_slug = $this->slug_generator($request->post_title);
     $post->short_title = $request->short_title;
     $post->post_details = $request->post_details;
     $post->post_date = $request->post_date;

     if ($request->file('image')){
          $file = $request->file('image');
            @unlink(public_path('upload/postimage/'.$data->image));
          $filename =date('YmdH').$file->getClientOriginalName();
          $file->move(public_path('upload/postimage'), $filename);
          $post['image'] = $filename;
        }

        if ($request->file('post_file')){
          $file = $request->file('post_file');
            @unlink(public_path('upload/postfile/'.$data->image));
          $filename =date('YmdH').$file->getClientOriginalName();
          $file->move(public_path('upload/postfile'), $filename);
          $post['post_file'] = $filename;
        }

        $post->save();

        return redirect()->route('posts.view')->with('success','Post Updated Successfully');
  }

  public function active($id){
      $post = Post::find($id);
      $post->status = 1;
      $post->save();
      return redirect()->route('posts.view')->with('success','Post Active Successfully');
    }

    public function inactive($id){
      $post = Post::find($id);
      $post->status = 0;
      $post->save();
      return redirect()->route('posts.view')->with('success','Post Inactive Successfully');
    }

     public function delete($id){
      $post= post::find($id);
      
             if (file_exists('upload/postimage/' . $post->image) AND !
                 empty($post->image)){
                  unlink('upload/postimage/' . $post->image);
       }
             if (file_exists('upload/postfile/' . $post->post_file) AND !
                 empty($post->post_file)){
                  unlink('upload/postfile/' . $post->post_file);
       }
        $post->delete();
       return redirect()->route('posts.view')->with('success','Post Deleted Successfully');
    }



	

  public function slug_generator($string){
            $string = str_replace(' ', '-', $string);
            $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            return strtolower(preg_replace('/-+/', '-', $string));
          }
}
// public function generateslug()
  // {
  //  $this->post_slug = Str:: slug($request->post_title);
  // }