<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('doctor.index');
    }

    public function patientlist()
    {
        $patient = Appointment::all();
        return view('doctor.patientlist', compact('patient'));
    }

     public function Accept(Request $request) {
        $id = $request->id;
        $user = Appointment::find($id);
        $user->status  = '1';
        $user->save();
    }

    public function Pending(Request $request) {
        $id = $request->id;
        $user = Appointment::find($id);
        $user->status  = '0';
        $user->save();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctor.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Doctor;
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->hospital = $request->input('hospital');
        $profile->department = $request->input('department');
        $profile->address = $request->input('address');
        $profile->certifications = $request->input('certifications');
        $profile->experience = $request->input('experience');
        $profile->user_id = auth()->user()->id; 
        $profile->user_email = auth()->user()->email; 
         if($request->hasfile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalName(); //getting image extension
            $filename =$extension;
            $file->move('uploads/doctor/', $filename);
            $profile->images = $filename;

        }      
        $profile->save();

        return redirect('/doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = DB::table('doctors')->where('user_id', $id)->first();
        return view('doctor.viewprofile', compact('user'));
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
        return view('doctor.updateprofile', compact('user'));
    }

      public function treatment($id)
    {
         $user = Doctor::find($id);
        return view('doctor.updateprofile', compact('user'));
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
