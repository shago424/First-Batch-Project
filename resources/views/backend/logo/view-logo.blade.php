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
              <li class="breadcrumb-item active">Student List</li>
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
                <h4>Logo List
                <a href="{{ route('logos.add') }}" class=" btn btn-warning float-right"><i class="fa fa-plus-circle"></i>
                  Add Logo
                </a>
               </h4>
              </div><!-- /.panel-header -->
              <div class="panel-body p-3">
            <table id="example2" class="table table-bordered table-hover table-sm">
                  <thead>
                  <tr style="background-color: #210C4C;color: white">
                    <th >SL</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($logos as $key => $logo)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $logo->id }}</td>
                    <td style="text-align: center;"><img id="delete" style="width: 50px;height: 60px" class="logo-image-img img-fluid img-circle"
                       src="{{(!empty($logo->image))?url('upload/logoimage/'.$logo->image):url('upload/usernoimage.png')}}"
                       alt="image profile picture">
                     </td>
                    
                   {{--  <td> 
                      @if($logo->status==1)
                     <span class=" badge badge-success p-2">Active</span> 
                     @else
                      <span class=" badge badge-danger p-2">Inactive</span> 
                     </td>
                     @endif
                    <td>  --}}
                     {{--  @if($logo->status==1)
                      <a  href="{{ route('logos.inactive',$logo->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-arrow-down"></i></a>
                      @else
                      <a  href="{{ route('logos.active',$logo->id) }}" class="btn btn-success btn-sm"><i class="fas fa-arrow-up"></i></a>
                      @endif --}}
                      <td>
                        <a  href="{{ route('logos.edit',$logo->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                         <a  href="{{ route('logos.delete',$logo->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  
                  @endforeach
                  </tbody>

               
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