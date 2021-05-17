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
              <li class="breadcrumb-item active">User List</li>
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
          <section class="col-md-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header" style="background-color: #210C4C;color: white">
                <h4>Users List
                <a href="{{ route('users.add') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  Add User
                </a>
               </h4>
              </div><!-- /.card-header -->
              <div class="card-body">
             <table class="table table-bordered table-sm table-hover" id="example1">
               <thead>
                 <tr style="background-color: lightgreen">
                   <th>SL</th>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Mobile</th>
                   <th>Image</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                @foreach($users as $key => $user)
                 <tr>
                   <td>{{ $key+1 }}</td>
                   <td>{{ $user->id }}</td>
                   <td>{{ $user->name }}</td>
                   <td>{{ $user->email }}</td>
                   <td>{{ $user->mobile }}</td>
                   <td>1</td>
                   <td>1</td>
                 </tr>
               </tbody>
               @endforeach
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