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
              <li class="breadcrumb-item active">Add Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-6 offset-md-3">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="panel" style="border:solid 3px #0A4833;background-color: white;">
              <div class="panel-header p-2" style="border:solid 3px #0A4833;background-color: #0A4833;color: white">
                <h4>Add Post
                <a href="{{ route('posts.view') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  Post List
                </a>
               </h4>
              </div><!-- /.panel-header -->
              <div class="panel-body p-3">
                <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" id="quickForm" >
                  @csrf
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="category_id">Name</label>
                    <select class="form-control"  name="category_id" id="category_id" placeholder="Enter category_id" >
                      <option value="">Select Post Category</option>
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>

                <font style="color:red">{{($errors)->has('category_id')?($errors->first('category_id')):''}}</font>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label for="post_title">Post Title</label>
                    <input type="post_title"class="form-control"  name="post_title" id="post_title" placeholder="Enter Post Title" value="">

                <font style="color:red">{{($errors)->has('post_title')?($errors->first('post_title')):''}}</font>
                  </div>


                 <div class="form-group col-md-12">
                    <label for="short_title">Short Title</label>
                    <input type="short_title"class="form-control"  name="short_title" id="short_title" placeholder="Enter Short Title" value="">

                <font style="color:red">{{($errors)->has('short_title')?($errors->first('short_title')):''}}</font>
                  </div>


                    <div class="form-group col-md-12">
                    <label for="post_details">Post Details</label>
                    <textarea class="form-control" name="post_details" id="post_details" placeholder="Enter Post Details" rows="5">
                    </textarea>
                      <font style="color:red">{{($errors)->has('post_details')?($errors->first('post_details')):''}}</font>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="post_date">Post Date</label>
                    <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Enter Post Date">
                      <font style="color:red">{{($errors)->has('post_date')?($errors->first('post_date')):''}}</font>
                  </div>

                    <div class="form-group col-md-12"> 
                    <img id="showimage" src="{{url('upload/usernoimage.png')}}"
                       alt="User profile picture" style="width: 120px;height: 140px;border:1px solid #000;">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                  </div>

                    <div class="form-group col-md-12"> 
                    <label for="image">Upload File</label>
                    <input type="file" name="post_file" id="post_file" class="form-control" >
                  </div>
                 
                   <div class="form-group col-md-12">
                    <input type="submit" name="submit" value="Add Post" class="btn btn-success">
                    
                  </div>

                  
                  </div>
                  </form>
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

{{--   {{(!empty($editdata->image))?url('upload/memberimage/'.$editdata->image):url('upload/usernoimage.png')}} --}}
  <!-- /.content-wrapper -->
<script>
$(function () {
  // $.validator.setDefaults({
  //   submitHandler: function () {
  //     alert( "Form successful submitted!" );
  //   }
  // });
  $('#quickForm').validate({
    rules: {

        short_title: {
        required: true,
       
      },

        category_id: {
        required: true,
       
      },

        post_title: {
        required: true,
       
      },

         post_details: {
        required: true,
       
      },

        post_date: {
        required: true,
       
      },


      email: {
        required: true,
        email: true,
        
      },
      password: {
        required: true,
        minlength: 5
      },
     
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
  @endsection