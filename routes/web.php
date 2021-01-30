<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/treatment', function () {
    return view('doctor.treatmentform');
});

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/unauthorized', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('homepage.about');
});

Route::get('/contact', function () {
    return view('homepage.contact');
});

////Add Doctor
Route::resource('adddoctor', 'AdddoctorController');

Route::post('adddoctor/update', 'AdddoctorController@update')->name('adddoctor.update');

Route::get('adddoctor/destroy/{id}', 'AdddoctorController@destroy');
///


Auth::routes();

Route::resource('/treatmentinfo', 'TreatmentController');
//Doctor
Route::resource('/doctor', 'DoctorController');
Route::get('/', 'DashboardController@index');
Route::get('/doctorlist', 'DashboardController@doctordetails');
Route::get('/viewpatient', 'DoctorController@patientlist');
Route::post('/panel/patient/accept', 'DoctorController@Accept');
Route::post('/panel/patient/pending', 'DoctorController@Pending');
//Patient
Route::resource('/patient', 'PatientController');
Route::get('/viewappointment', 'PatientController@appointmentlist');
Route::get('upldreport/{id}/uploadreport/','PatientController@uploadreport');
Route::post('/upldreport', 'PatientController@storereport')->name('upldreport.storereport');
Route::get('/viewreport', 'ReportController@reportlist');
Route::get('/patientreport', 'ReportController@patientreportlist');
// Route::get('/', 'DashboardController@index');
// Route::get('/doctorlist', 'DashboardController@doctordetails');

//Doctor
Route::resource('/doctorview', 'DoctorviewController');

Route::get('send-mail','MailSend@mailsend');
Route::get('send','MailSend@create');
Route::get('sendto','MailSend@create');




