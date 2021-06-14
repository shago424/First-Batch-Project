@extends('frontend.layouts.master')
@section('content') 
@include('frontend.layouts.header')

<div class="row mt-5 mb-5">
	<div class="col-md-12">
	 <div class="panel"style="">
	<div class="panel-header text-white" >
		<img src="{{ asset('upload') }}/blogo.jpg" width="100%">
		<h4 style="margin-top:-75px" class=" p-3">Post Details  <button class="float-right btn btn-warning">
			{{ date('d-M-Y',strtotime($post_page->post_date ))}}</button>
		</h4>
	</div>
	<div class="panel-body mt-5" >
		<div class="row">
			<div class="col-md-4">
				<div class="p-5">
					<img src="{{ asset('upload/postimage') }}/{{ $post_page->image }}" width="100%" height="300">
				</div>
				<div class="p-5">
					<a target="_blank" class="btn btn-primary" href="{{ asset('upload/postfile') }}/{{ $post_page->post_file }}">Notice Download</a>
				</div>
			</div>

			<div class="col-md-8">
				<h3>{{ $post_page->post_title }}</h3>
				<h6 style="color: green"> Post Date : {{ $post_page->created_at->diffForHumans() }}</h6>

				<div class="mt-5">
					<p>{{ $post_page->post_details }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>



@endsection
