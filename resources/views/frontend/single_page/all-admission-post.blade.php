@extends('frontend.layouts.master')
@section('content') 
@include('frontend.layouts.header')

<div class="row mt-3 mb-5">
	<div class="col-md-12">
	 <div class="panel"style="">
	<div class="panel-header text-white" >
		<img src="{{ asset('upload') }}/blogo.jpg" width="100%">
		<h4 style="margin-top:-75px" class=" p-3">All Admission Post  <button class="float-right btn btn-warning">
			</button>
		</h4>
	</div>
	<div class="panel-body mt-5" style="background-color:white">
		<div class="row">
			<div class="col-md-12">
				<table class="table  table-hover table-bordered table-sm" width="100">
					<thead>
						<tr>
						<th>#</th>
						<th>Post Image</th>
						<th>Post Date</th>
						<th>Post Title</th>
						<th>Post View</th>
						<th>Post File</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $key => $post)
						<tr>
							<td>{{ $key+1 }}</td>
							<td><img src="{{ asset('upload/postimage') }}/{{ $post->image }}" width="50px" height="50px"></td>
							<td>{{ date('d-M-Y',strtotime($post->post_date)) }}</td>
							<td><a style="text-decoration: none" href="{{ route('post.details',$post->id) }}">{{ $post->post_title }}</a></td>
							<td><a target="_blank" class="btn btn-primary btn-sm" href="{{ asset('upload/postfile') }}/{{ $post->post_file }}">Download</a></td>
							<td><a title="page" href="{{ route('post.details',$post->id) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Post View</a></td>
						</tr>
						@endforeach

					</tbody>
				</table>
				{{ $posts->links() }}
			</div>

			
		</div>
	</div>
</div>
	</div>
</div>



@endsection
