@extends('doctor.layouts.master')

@section('title')
View Treatment Details
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      View Treatment Details Form
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
        <form  method="POST" action="{{ route('treatmentinfo.store') }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Name</label>
                <input type="text" name="p_name"  class="form-control" value=" {{$treatment->p_name}}" readonly>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Phone</label>
                <input type="text" name="p_phone" class="form-control" value=" {{$treatment->p_phone}}" readonly>
              </div>
              <!-- /.form-group -->
               <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Email</label>
                <input type="text" name="p_email" class="form-control" value=" {{$treatment->p_email}}" readonly>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">

 @foreach($doctor as $dctr)
                 @if($dctr->email == $treatment->user_email)
              <div class="field_wrapper">
                <label>Doctor Name</label>
                <input type="text" name="p_email" class="form-control" value=" {{$dctr->name}}" readonly>
              </div>
              @endif
           @endforeach

                 <div class="field_wrapper">
                <label>Doctor Email</label>
                <input type="text" name="p_email" class="form-control" value=" {{$treatment->user_email}}" readonly>
              </div>

              
                 <div class="field_wrapper">
                <label>Test Report</label>
                <input type="text" name="p_email" class="form-control" value=" {{$treatment->t_report}}" readonly>
              </div>
              <!-- /.form-group -->

<!-- /.form-group -->
              <div class="form-group">
                <label>Medecine</label>
                <textarea type="text" name="comment" class="form-control" readonly>{{$treatment->comment}}</textarea>
              </div>
              <!-- /.form-group -->

            </div>
            <!-- /.col -->

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
                   <br>
            </form>
      </div>
      <!-- /.box -->

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">CSE Department</a>.</strong> All rights
    reserved.
  </footer>
      @endsection
