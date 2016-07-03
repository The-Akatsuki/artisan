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

Route::get('/', function () {
    return view('welcome');
});





Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('company_information', 'company_informationController');

Route::resource('department', 'departmentController');
Route::resource('employee', 'employeeController');

Route::resource('job_type', 'job_typeController');
Route::resource('job_title', 'job_titleController');
Route::resource('pay_grade', 'pay_gradeController');

Route::resource('skills', 'skillsController');

Route::resource('qualifications', 'qualificationsController');