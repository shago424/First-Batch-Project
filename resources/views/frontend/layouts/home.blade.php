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

  @include('frontend.layouts.left-sidebar')

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

@include('frontend.layouts.right-sidebar')
{{-- Right Sidebar End --}}


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



