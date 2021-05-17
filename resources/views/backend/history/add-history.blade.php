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
              <li class="breadcrumb-item active">Add History</li>
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
                <h4>Add History
                <a href="{{ route('histories.view') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  History List
                </a>
               </h4>
              </div><!-- /.panel-header -->
              <div class="panel-body p-3">
                <form method="post" action="{{ route('histories.store') }}" enctype="multipart/form-data" id="quickForm" >
                  @csrf
                <div class="form-row">
                  
                  <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text"class="form-control"  name="title" id="title" placeholder="Enter Title" value="">
                <font style="color:red">{{($errors)->has('title')?($errors->first('title')):''}}</font>
                  </div>
                   
                  <div class="form-group col-md-12">
                    <label for="details">Details</label>
                    <textarea class="form-control" name="details" id="details" placeholder="Enter Details" rows="5">
                    </textarea>
                      <font style="color:red">{{($errors)->has('details')?($errors->first('details')):''}}</font>
                  </div>

                    <div class="form-group col-md-12"> 
                    <img id="showimage" src="{{url('upload/usernoimage.png')}}"
                       alt="User profile picture" style="width: 120px;height: 140px;border:1px solid #000;">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                    <font style="color:red">{{($errors)->has('image')?($errors->first('image')):''}}</font>
                  </div>
                 
                   <div class="form-group col-md-12">
                    <input type="submit" name="submit" value="Add History" class="btn btn-success">
                    
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

        title: {
        required: true,
       
      },

        image: {
        required: true,
       
      },

         details: {
        required: true,
       
      },

        degi: {
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