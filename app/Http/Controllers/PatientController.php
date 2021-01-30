<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;
use App\Treatment;
use App\User;
use App\Report;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index');
    }

     public function appointmentlist()
    {
        $appointment = Appointment::all();
        $treatment =Treatment::all();
        return view('patient.viewappointment', compact('appointment','treatment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apt = new Appointment;
        $apt->doctor_name = $request->input('doctor_name');
        $apt->doctor_email = $request->input('doctor_email');
        $apt->doctor_phone = $request->input('doctor_phone');
        $apt->patient_email = $request->input('patient_email');
        $apt->patient_phone = $request->input('patient_phone');
        $apt->patient_name = $request->input('patient_name');
        $apt->apt_date = $request->input('apt_date');
        $apt->user_id = auth()->user()->id; 
        $apt->user_email = auth()->user()->email; 
          
        $apt->save();

        return redirect('/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatment = DB::table('treatments')->where('p_email', $id)->first();
        $doctor =User::all();
        return view('patient.viewtreatment', compact('treatment','doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Doctor::find($id);
        return view('patient.appointment', compact('user'));
    }

      public function uploadreport($id)
    {
        $apt = appointment::find($id);
        return view('patient.uploadreport', compact('apt'));
    }

    public function storereport(Request $request)
    {
        $rprt = new Report;
        $rprt->d_name = $request->input('d_name');
        $rprt->d_email = $request->input('d_email');
        $rprt->p_email = $request->input('p_email');
        $rprt->p_name = $request->input('p_name');
        $rprt->user_id = auth()->user()->id; 
        $rprt->user_email = auth()->user()->email; 
        if($request->hasfile('r_image')) {
            $file = $request->file('r_image');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/report/', $filename);
            $rprt->r_image = $filename;

        } 
          
        $rprt->save();

        return redirect('/viewreport');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
