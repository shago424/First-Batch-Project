@extends('frontend.layouts.master')
@section('content') 
    
@include('frontend.layouts.header')
<!-- Slider Part -->
@php
$count =0;
@endphp

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($sliders as $key => $slider)
    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="@if($count == 0){ active } @endif"></li>
    @endforeach
   </ol>
  <div class="carousel-inner">
    @foreach($sliders as  $slider)
    <div class="carousel-item @if($count == 0){ active } @endif">
      <img src="{{ asset('upload/sliderimage')}}/{{ $slider->image }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $slider->title }}</h5>
        <p>{{$slider->description}}</p>
      </div>
    </div>
    @php
    $count++;
    @endphp
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- ----------------Slider end------------- -->

<!-- ----------------Marquee Start------------- -->

<div class="row" style="height: 45px;margin: 0 0">
  <div class="col-sm-3 text-center" style="background: lightblue;color: black;padding-top: 10px;">
   Argent Notice 
  </div>
   <div class="col-sm-9" class="dummy" style="background:  #e3dd12  ;color: white;padding-top: 10px">
    <ul style="list-style: none;">
    <marquee onmouseover="this.stop()" onmouseout="this.start()" direction="left">
      @foreach($argents as $argent)
    <li><a style="text-decoration: none;" href="{{ route('post.details',$argent->id) }}">{{ $argent->post_title }}</a></li>
    @endforeach
     <!-- <li><a  href="#">Latest News</a></li> -->
  </marquee>
 </ul>
  </div>
</div>

  <div class="card">
  <div class="card-body">
    <div class="row pt-1" style="margin : 0 0;background-color: #fff" >


<!-- ----------Left Sidebar Start------------------- -->

  <div class="col-sm-3" style="" >

     <div class="panel panel-primary" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title">Recent Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">  
                 @foreach($recents as $recent)      
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$recent->id) }}"><i class="fa fa-angle-right"></i>  {{ $recent->post_title }}</a></li>
                @endforeach
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>


            <div class="panel panel-primary mt-2" id="result_panel" style="margin-top: 0;background-color:  #eef2f7 ;border: 1px solid gray;">
        <div class="panel-heading bg-warning"style=" 
;color: black"><h5 style="padding: 15px" class="panel-title text-center">Admission Result Exam Notice  </h5>
              </div>
             <div class="panel-body" style="background-color:  #eef2f7 ;height: 100px">

                <ul style="list-style: none;" >
                 <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()"> 
                 @foreach($adexrs as $aer)       
                <li ><a style="text-decoration: none;" href="{{ route('post.details',$aer->id) }}"><i class="fa fa-angle-right"></i>  {{ $aer->post_title }}</a></li> 
                @endforeach    
                  
                            
            </ul>
          </marquee>
          </div>

          <div class="panel-footer"style=" 
;color: black;border-radius: none"> <a class="btn btn-primary"  href="" style="padding: 7px;padding-bottom: 7px;width: 100%;" class="panel-title">See All Notice </a>
              </div>
          </div>
   


<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-danger" class="notice" style="color: white">
    Notice Panel
  </div>
  <a style="width: 100%" class="btn btn-success text-left" href="">Recent Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">All Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Admission Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Exam Notice</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-success text-left" href="">Result Notice</a>
 
</div>

<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-primary" class="notice" style="color: white">
    Gallery
  </div>
  <ul class="list-group list-group-flush">
    <li style="background-color: red;" class="list-group-item"><a style="text-decoration: none;color: white" href="">Photo Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Event Gallery</a></li>
   <li style="background-color: red;margin-top:5px" class="list-group-item"><a style="text-decoration: none;color: white" href="">Video Gallery</a></li>
  

  </ul>
</div>








  </div>

  <!-- ----------Left Sidebar End------------------- -->

    <!-- ----------Content Start------------------- -->

   <div class="col-sm-6" style="">
  
   <div class="card" style="border-radius: none;border:none;">
  <img src="{{ asset('upload/historyimage')}}/{{ $history->image }}" class="card-img-top" alt="..." style="border-radius: none;border:none;"  height="200px">
  <div class="card-body" style="background-color:  #f1eaf9 ;border-radius: none;border:none;">
    <h5 class="card-title">College History</h5>
    <p class="card-text">{{ $history->title }}</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

<div class="card  mt-2">
  <img src="{{ asset('frontend')}}/image/s3.gif" class="card-img-top" alt="...">
  <div class="card-body" style="background-color:  #cdf4cd ">
    <h5 class="card-title">Latest News</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

 <div class="card  mt-2">
  <img src="{{ asset('frontend')}}/image/s3.gif" class="card-img-top" alt="...">
  <div class="card-body" style="background-color:  #feedf0 ">
    <h5 class="card-title">Latest Event</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <a class="btn btn-secondary" href="#">See Details</a>
  </div>
</div>

  </div>

  <!-- ----------Content Part end------------------- -->

<!-- ----------Right Sidebar Start------------------- -->

   <div class="col-sm-3" style="">
   @foreach($principals as $principal)
   <div class="card" style="width:100%;height: 330px;border-radius: none;;">
  <img class="card-img-top pt-2" src="{{ asset('upload/principalimage/')}}/{{ $principal->image }} " alt="Card image" height="180px">
  <div class="card-body" style="background-color:  #fbe6e3 ">
    <h4 class="card-title">{{ $principal->degi }}</h4>
    <p style="padding: 0">{{ $principal->name }}</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
@endforeach



<div class="card mt-2" style="max-width: 100%;margin-left: 0">
  <div class="card-header bg-success" class="notice" style="color: white">
   Emergency Website Link
  </div>
  <a style="width: 100%" class="btn btn-warning text-left" href="">SHED</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">DSHE</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">NU</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">Rajshahi Board</a>
  <a style="width: 100%;margin-top: 3px" class="btn btn-warning text-left" href="">EMIS Cell</a>
 
</div>

<div class="card mt-2">
  <div class="fb-page" data-href="https://www.facebook.com/SsbLearningInstitute" data-tabs="timeline" data-width="" data-height="140px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SsbLearningInstitute" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SsbLearningInstitute">SSB Learning Institute - এসএসবি লার্নিং ইন্সটিটিউট</a></blockquote></div>
  
</div>

  </div>


</div>
  </div>
</div>

<div class="card mt-1" >
  <h5 class="card-header">College Location</h5>
  <div class="card-body">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
  </div>
</div>

  
 @endsection



