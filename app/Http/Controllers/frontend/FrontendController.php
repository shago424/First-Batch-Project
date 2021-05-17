<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Principal;
use App\Model\History;
use App\Model\Post;
class FrontendController extends Controller
{
    public function index(){


    	$data['logo'] = Logo::first();
    	$data['sliders'] = Slider::where('status',1)->get();
    	$data['principals'] = Principal::where('status',1)->limit(2)->get();
    	$data['history'] = History::where('status',1)->first();
    	$data['argents'] = Post::where('status',1)->where('category_id',1)->limit(1)->get();

    	$data['recents'] = Post::where('status',1)->orderBy('id','DESC')->limit(6)->get();
    	$data['adexrs'] = Post::where('status',1)->whereIn('category_id',['3','4','5'])->orderBy('id','DESC')->limit(6)->get();
    	return view('frontend.layouts.home',$data);
    }


    public function postdetails($post_slug){
        $data['post_page'] =Post::findorfail($post_slug);
        $data['logo'] = Logo::first();
        return view('frontend.single_page.post-details',$data);
    }




}
