@extends('backend.layouts.master')
@section('content') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Post List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pb-2">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="panel" style=" background: white">
              <div class="panel-header p-2" style="background-color: #0A4833;color: white">
                <h4>Post List
                <a href="{{ route('posts.add') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  Add Post
                </a>
               </h4>
              </div><!-- /.panel-header -->
              <div class="panel-body p-3">
            <table id="example1" class="table table-bordered table-hover table-sm">
                  <thead>
                  <tr style="background-color: #210C4C;color: white">
                    <th >SL</th>
                    <th>ID</th>
                    <th>Post Date</th>
                    <th>Category Post</th>
                    <th>Post Title</th>
                    <th>Post Details</th>
                    <th>Image</th>
                    <th>File</th>
                    <th>Staus</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $key => $post)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->post_date }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->post_title }} </td>
                    <td width="30%">{{ $post->post_details }}</td>
                    <td style="text-align: center;"><img style="width: 50px;height: 60px" class="post-image-img img-fluid img-circle"
                       src="{{(!empty($post->image))?url('upload/postimage/'.$post->image):url('upload/usernoimage.png')}}"
                       alt="image profile picture">
                     </td>

                      <td style="text-align: center;"><a href="
                       {{asset('upload/postfile/'.$post->post_file)}}" target="_blank">File</a>
                       
                     </td>
                    
                    <td> 
                      @if($post->status==1)
                     <span class=" badge badge-success p-2">Active</span> 
                     @else
                      <span class=" badge badge-danger p-2">Inactive</span> 
                     </td>
                     @endif
                    <td> 
                      @if($post->status==1)
                      <a  href="{{ route('posts.inactive',$post->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-arrow-down"></i></a>
                      @else
                      <a  href="{{ route('posts.active',$post->id) }}" class="btn btn-success btn-sm"><i class="fas fa-arrow-up"></i></a>
                      @endif
                        <a  href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                         <a  href="{{ route('posts.delete',$post->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  
                  @endforeach
                  </tbody>

                {{--   <tfoot>
                  <tr style="background-color: #210C4C;color: white">
                     <th># SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Staus</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> --}}
                </table>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection