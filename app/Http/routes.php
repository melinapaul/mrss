<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('auth/logout', 'ParseAuth\AuthController@logout');
Route::get('auth/login', 'ParseAuth\AuthController@index');
Route::post('auth/login', 'ParseAuth\AuthController@login');
Route::get('auth/register', 'ParseAuth\AuthController@registerform');
Route::post('auth/register', 'ParseAuth\AuthController@register');

Route::get('doctor/appointments', 'DoctorController@appointments');
Route::get('doctor/patients', 'DoctorController@patients');
Route::get('doctor/appointments/add', 'DoctorController@addappointment');
Route::post('doctor/appointments/add', 'DoctorController@saveappointment');
Route::get('doctor/profile/edit', 'DoctorController@editprofile');
Route::post('doctor/profile/edit', 'DoctorController@updateprofile');
Route::get('doctor/profile/{id}', 'DoctorController@profile');

Route::get('patient/appointments', 'PatientController@appointments');
Route::get('patient/prescriptions', 'PatientController@prescriptions');
Route::get('patient/profile/edit', 'PatientController@editprofile');
Route::post('patient/profile/edit', 'PatientController@updateprofile');
Route::get('patient/appointments/add', 'PatientController@addappointment');
Route::get('patient/appointments/add/{id}', 'PatientController@makeappointment');
Route::get('patient/appointments/cancel/{id}', 'PatientController@cancelappointment');

Route::get('patient/record/{id}', 'RecordController@record');
Route::get('record/notes/add/{id}', 'RecordController@notes');
Route::post('record/notes/add/{id}', 'RecordController@addnotes');
Route::get('record/scan/add/{id}', 'RecordController@scan');
Route::post('record/scan/add/{id}', 'RecordController@addscan');
Route::get('record/prescription/add/{id}', 'RecordController@prescription');
Route::get('record/prescription/dispense/{id}', 'RecordController@dispense');
Route::get('record/prescription/cancel/{id}', 'RecordController@cancel');
Route::get('record/prescription/refill/{id}', 'RecordController@refill');
Route::post('record/prescription/add/{id}', 'RecordController@addprescription');
Route::post('record/vitalbp/add/{id}', 'RecordController@addbp');
Route::post('record/vitaltemperature/add/{id}', 'RecordController@addtemperature');
Route::post('record/vitalweight/add/{id}', 'RecordController@addweight');
Route::post('record/vitalpulse/add/{id}', 'RecordController@addpulse');

Route::get('nurse/prescriptions', 'NurseController@prescriptions');
Route::get('nurse/patients', 'NurseController@patients');
/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
