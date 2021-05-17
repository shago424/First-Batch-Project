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
              <li class="breadcrumb-item active">Add User</li>
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
            <div class="card">
              <div class="card-header" style="background-color: #210C4C;color: white">
                <h4>Add User
                <a href="{{ route('users.view') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  User List
                </a>
               </h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="">
                <div class="form-row">
                  
                  <div class="form-group col-md-12">
                    <label for="name">Name</label>
                    <input type="name"class="form-control" name="name" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div>
                    <div class="form-group col-md-12">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="address">address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                  </div>

                  <div class="form-group col-md-12">
                    <img id="showimage" src=""
                       alt="User profile picture" style="width: 120px;height: 140px;border:1px solid #000;">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                  </div>
                 
                   <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-success">
                    
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
  <!-- /.content-wrapper -->
  @endsection