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
        <form  method="POST" action="{{ route('treatmentinfo.store') }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Name</label>
                <input type="text" name="p_name"  class="form-control" value=" {{$appnmnt->patient_name}}" readonly>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Phone</label>
                <input type="text" name="p_phone" class="form-control" value=" {{$appnmnt->patient_phone}}" readonly>
              </div>
              <!-- /.form-group -->
               <!-- /.form-group -->
              <div class="form-group">
                <label>Patient Email</label>
                <input type="text" name="p_email" class="form-control" value=" {{$appnmnt->patient_email}}" readonly>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                 <div class="field_wrapper">
                <label>Test Report</label>
                <select class="form-control select2" name="t_report" style="width: 100%;">
                  <option>--- Select Test Report---</option>
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ asset('images/icons/add-icon.png')}}"/></a>
              </div>
              <!-- /.form-group -->

<!-- /.form-group -->
              <div class="form-group">
                <label>Comment</label>
                <textarea type="text" name="comment" class="form-control"></textarea>
              </div>
              <!-- /.form-group -->

            </div>
            <!-- /.col -->

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
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
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">CSE Department</a>.</strong> All rights
    reserved.
  </footer>
      @endsection
