@extends('patient.layouts.master')

@section('title')
Patient list
@endsection

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
   <div class="box-header">
              <h3 class="box-title">Report List</h3>
           
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
                                  <th>Report Image</th>
                                  <th>Doctor Name</th>
                                  <th>Doctor Email</th>
                                  <th>Patient Name</th>
                                  <th>Patient Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($rprt as $freelancer)
                                 @if($freelancer->d_email ==  Auth::user()->email)
                                <tr>
                                  <td> <img id="myImg" src="{{ asset('uploads/report/' . $freelancer->r_image) }}" alt="Report Image" style="width:100%;max-width:300px"> </td> 
                                  <td> {{ $freelancer->d_name}} </td>
                                  <td> {{ $freelancer->d_email}} </td>
                                  <td> {{ $freelancer->p_name}} </td>
                                  <td> {{ $freelancer->p_email}} </td>
                                </tr>
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
                         </section>
                       </div>
 <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
@endsection
