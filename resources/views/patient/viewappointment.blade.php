@extends('admin.layouts.master')

@section('title')
Patient list
@endsection

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>
 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
   <div class="box-header">
              <h3 class="box-title">Patient List</h3>
           
   @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif
            </div>

            <!-- /.box-header -->
            <div class="box-body">
        <br />
      <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-striped">
                                    <thead>
                                <tr>
                                  <th>Doctor Name</th>
                                  <th>Doctor Phone</th>
                                  <th>Doctor Email</th>
                                  <th>Patient Name</th>
                                  <th>Appointment Date</th>
                                  <th>Appointment Status</th>
                                  <th>Treatment Status</th>
                                  <th>View Treatment</th>
                                  <th>Upload Report</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($appointment as $freelancer)
                                 @if($freelancer->patient_email ==  Auth::user()->email)
                                <tr>
                                  <td> {{ $freelancer->doctor_name}} </td>
                                  <td> {{ $freelancer->doctor_phone}} </td>
                                  <td> {{ $freelancer->doctor_email}} </td>
                                  <td> {{ $freelancer->patient_name}} </td>
                                  <td> {{ $freelancer->apt_date}} </td>
                                  @if($freelancer->status == 0)
                                   <td> <span class="label label-danger"> Pending </span> </td>
                                  @elseif($freelancer->status == 1)
                                  <td> <span class="label label-success"> Accept </span> </td>
                                  @else
                                    <td> <span class="label label-info"> Transfer </span> </td>
                                  @endif
                                   @if($freelancer->status == 1)
                                     <td> <span class="label label-success"> Accept </span> </td>
                                      <td><a href="{{ route('patient.show', $freelancer->patient_email) }}" class="btn btn-success"> <i class="fa fa-eye"></i> View Treatment</a></td>
                                       <td><a href="{{action('PatientController@uploadreport', $freelancer['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Upload Report</a></td>
                                    @else
                                    <td> <span class="label label-danger"> Pending </span> </td>
                                <td><button type="button" class="btn btn-block btn-danger" disabled>Treatment Info Pending</button></td>
                                <td><button type="button" class="btn btn-block btn-danger" disabled>Upload Report Pending</button></td>
                                    @endif
                             
                         
                              
                                  @endif
                                @endforeach

                              </tbody>
                             <span id="val"></span>
                            </table>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>

@endsection
