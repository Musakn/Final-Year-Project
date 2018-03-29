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

Route::get('/', function () {
    return view('welcome');
});



Route::get('Index_page','FYPcontroller@Homepage');
Route::get('Aboutus_page','FYPcontroller@AboutUspage');
Route::get('Diseas_Diagnoses_page','FYPcontroller@DiseaseDiagnosespage');
Route::get('Agepage','FYPcontroller@Agelmtpage');
Route::get('Feedback_page','FYPcontroller@Feedbackpage');
Route::get('Report_grapics_page',"FYPcontroller@Reportgrapicspage");
Route::get('Signup_page','FYPcontroller@Signuppage');
Route::get('Login_page','FYPcontroller@Loginpage');
Route::get('Report','FYPcontroller@Report');