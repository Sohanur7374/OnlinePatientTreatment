<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Doctor;
use App\User;
use DB;

class AdddoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
         public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index(Request $request)
    {
if(request()->ajax())
     {
       $data = DB::table('users')
        ->where('role', 'doctor');
      return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
     }
          
        $user= User:: all();
        return view('admin.registereddoctor',compact('user'));
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
        $rules = array(
            'name' => 'required|string|max:255',
        'email' => 'required|string|max:255|unique:users',
        'email' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
        'role' => 'required', //validate role input
            
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

       $student = new User;

         $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->password = bcrypt($request->input('password'));
       $student->role = $request->input('role');
         
        $student->save();

        return response()->json(['success' => 'Data Added successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show($sample_data)
    {
        if(request()->ajax())
        {
            $data = Student::findOrFail($sample_data);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

$rules = array(
            'name' =>  'required',
            'email'=>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'name'   =>  $request->name,
            'email'    =>  $request->email,
            'phone'    =>  $request->phone,
            'role'  =>  $request->role

        );

        User::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Doctor Info is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
