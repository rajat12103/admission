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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

//forms

Route::get('btechbsfform','btechbsfController@form');
Route::post('btechbsf_store','btechbsfController@store');
Route::post('btechbsf_update', 'btechbsfController@updateDetails');
Route::get('viewprofile','btechbsfController@profile');
Route::get('editprofile/{id}/edit','btechbsfController@editProfile');
Route::post('profile_update','btechbsfController@updateProfile');

Route::get('btechbsf/{id}/edit','btechbsfController@editFormDetails');
Route::get('btechbsf/{id}/submit','btechbsfController@submitFormDetails');

Route::post('transaction','TransactionController@storebsf');
Route::get('btechbsf/{id}/print','btechbsfController@printForm');

//admin

Route::get('allstudents', 'AdminController@allstudents');

Route::get('roomallot','AdminController@roomallot');
Route::post('roomallot_store','roomallotController@roomallot_store');

Route::get('attendance','AdminController@attendance');
Route::get('roomattendance','AdminController@roomattendance');
//Route::post('addattendance','AttendanceController@addattendance');
Route::post('addattendance','btechbsfController@addattendance');
Route::get('editattendance', 'AdminController@editattendance');
Route::post('updateattendance', 'AdminController@updateattendance');

Route::get('roomattendance102','AdminController@roomattendance102');
Route::get('editattendance102', 'AdminController@editattendance102');
Route::post('updateattendance102', 'AdminController@updateattendance102');
//Route::post('addattendance','AttendanceController@addattendance');
Route::post('addattendance102','btechbsfController@addattendance102');
//103
Route::get('editattendance103', 'AdminController@editattendance103');
Route::post('updateattendance103', 'AdminController@updateattendance103');

Route::get('roomattendance103','AdminController@roomattendance103');
//Route::post('addattendance','AttendanceController@addattendance');
Route::post('addattendance103','btechbsfController@addattendance103');


//104

Route::get('roomattendance104','AdminController@roomattendance104');
//Route::post('addattendance','AttendanceController@addattendance');
Route::post('addattendance104','btechbsfController@addattendance104');
Route::get('editattendance104', 'AdminController@editattendance104');
Route::post('updateattendance104', 'AdminController@updateattendance104');

Route::get('roomattendance105','AdminController@roomattendance105');
//Route::post('addattendance','AttendanceController@addattendance');
Route::post('addattendance105','btechbsfController@addattendance105');
Route::get('editattendance105', 'AdminController@editattendance105');
Route::post('updateattendance105', 'AdminController@updateattendance105');

Route::get('verifydocument','AdminController@verifydocument');
Route::get('documentverification','AdminController@documentverification');
Route::post('adddocumentverification','btechbsfController@adddocumentverification');
Route::get('editdocument','AdminController@editdocument');
Route::post('updatedocumentverification','AdminController@updatedocumentverification');

Route::get('documentverification102','AdminController@documentverification102');
Route::post('adddocumentverification102','btechbsfController@adddocumentverification102');
Route::get('editdocument102','AdminController@editdocument102');
Route::post('updatedocumentverification102','AdminController@updatedocumentverification102');

Route::get('documentverification103','AdminController@documentverification103');
Route::post('adddocumentverification103','btechbsfController@adddocumentverification103');
Route::get('editdocument103','AdminController@editdocument103');
Route::post('updatedocumentverification103','AdminController@updatedocumentverification103');

Route::get('documentverification104','AdminController@documentverification104');
Route::post('adddocumentverification104','btechbsfController@adddocumentverification104');
Route::get('editdocument104','AdminController@editdocument104');
Route::post('updatedocumentverification104','AdminController@updatedocumentverification104');

Route::get('documentverification105','AdminController@documentverification105');
Route::post('adddocumentverification105','btechbsfController@adddocumentverification105');
Route::get('editdocument105','AdminController@editdocument105');
Route::post('updatedocumentverification105','AdminController@updatedocumentverification105');

Route::get('viewpresent','AdminController@viewpresent');

Route::get('viewpresentstudent','AdminController@viewpresentstudent');
Route::get('viewpresentstudent102','AdminController@viewpresentstudent102');
Route::get('viewpresentstudent103','AdminController@viewpresentstudent103');
Route::get('viewpresentstudent104','AdminController@viewpresentstudent104');
Route::get('viewpresentstudent105','AdminController@viewpresentstudent105');

Route::get('generatemerit','AdminController@generatemerit');

Route::get('generatemeritbsf','AdminController@generatemeritbsf');
Route::get('generatemeritcapfs','AdminController@generatemeritcapfs');
Route::get('/student/print/{id}', 'btechbsfController@studentprint');

Route::post('storemerit','btechbsfController@storemerit');

Route::get('branchallotment', 'AdminController@branchallotment');
Route::get('branchallotment101', 'AdminController@branchallotment101');
Route::post('allotbranch101', 'btechbsfController@allotbranch101');

Route::get('branchallotment102', 'AdminController@branchallotment102');
Route::post('allotbranch102', 'btechbsfController@allotbranch102');

Route::get('branchallotment103', 'AdminController@branchallotment103');
Route::post('allotbranch103', 'btechbsfController@allotbranch103');

Route::get('branchallotment104', 'AdminController@branchallotment104');
Route::post('allotbranch104', 'btechbsfController@allotbranch104');

Route::get('branchallotment105', 'AdminController@branchallotment105');
Route::post('allotbranch105', 'btechbsfController@allotbranch105');

Route::get('seatsallotment','AdminController@seatsallotment');
Route::get('bsfseats','AdminController@bsfseats');
Route::get('capfsseats','AdminController@capfsseats');



