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
                                  <th>Patient Name</th>
                                  <th>Patient Phone</th>
                                  <th>Patient Email</th>
                                  <th>Appointment Date</th>
                                  <th>Appointment Status</th>
                                  <th>Treatment</th>
                                  <th>Appointment Accept</th>
                                  <th>Appointment Reject</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($patient as $freelancer)
                                 @if($freelancer->doctor_email ==  Auth::user()->email)
                                <tr>
                                  <td> {{ $freelancer->patient_name}} </td>
                                  <td> {{ $freelancer->patient_phone}} </td>
                                  <td> {{ $freelancer->patient_email}} </td>
                                  <td> {{ $freelancer->apt_date}} </td>
                                  @if($freelancer->status == 0)
                                   <td> <span class="label label-danger"> Pending </span> </td>
                                  @elseif($freelancer->status == 1)
                                  <td> <span class="label label-success"> Accept </span> </td>
                                  @else
                                    <td> <span class="label label-info"> Transfer </span> </td>
                                  @endif
                                   <td><a href="{{action('TreatmentController@edit', $freelancer['id'])}}" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Treatment</a></td>
                              
                                  <td>
                                     <button class="btn btn-success Accept" data-id="{{$freelancer->id}}">Accept</button>
                                   </td>
                                   <td>
                                     <button class="btn btn-danger Pending" data-id="{{$freelancer->id}}">Pending</button>
                                   </td>
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
