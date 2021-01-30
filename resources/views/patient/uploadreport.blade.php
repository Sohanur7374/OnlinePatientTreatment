@extends('doctor.layouts.master')

@section('title')
Treatment Form
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Treatment Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <form  method="POST" action="{{ route('upldreport.storereport') }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Name</label>
                <input type="text" name="p_name"  class="form-control" value=" {{$apt->patient_name}}" readonly>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Phone</label>
                <input type="text" name="p_phone" class="form-control" value=" {{$apt->patient_phone}}" readonly>
              </div>
              <!-- /.form-group -->
               <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Email</label>
                <input type="text" name="p_email" class="form-control" value=" {{$apt->patient_email}}" readonly>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                  <div class="form-group">
                <label>Doctor Name</label>
                <input type="text" name="d_name" class="form-control" value=" {{$apt->doctor_name}}" readonly>
              </div>
              <!-- /.form-group -->

 <!-- /.form-group -->
              <div class="form-group">
                  <div class="form-group">
                <label>Doctor Phone</label>
                <input type="text" name="d_phone" class="form-control" value=" {{$apt->doctor_phone}}" readonly>
              </div>
              <!-- /.form-group -->

<!-- /.form-group -->
               <div class="form-group">
                <label>Doctor Email</label>
                <input type="text" name="d_email" class="form-control" value=" {{$apt->doctor_email}}" readonly>
              </div>
              <!-- /.form-group -->

            </div>
            <!-- /.col -->

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <!-- /.form-group -->
    
                <label>Upload Report Image</label>
                <input type="file" name="r_image" class="form-control" >
             
              <!-- /.form-group -->
                   <br>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
      <!-- /.box -->

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    
  </footer>
      @endsection
