<?php

Route::get('/', function () {
    //return view('welcome');
    return redirect('login');
});

//Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('reset', 'Auth\LoginController@reset')->name('reset');
Route::post('reset', 'Auth\LoginController@reset')->name('reset');

// Registration Routes...
Route::get('/register', function () {
    //return view('welcome');
    return redirect('login');
});
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

/*// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/

// Users
// View Users
Route::get('/users', 'UserController@index')->name('users');
// Get Users
Route::get('user/getUsers', 'UserController@getUsers')->name('user/getUsers');
// Get User By Id
Route::post('user/getUserById', 'UserController@getUserById')->name('user/getUserById');
// Create User
Route::post('user/createUser', 'UserController@createUser')->name('user/createUser');
// Create User
Route::post('user/updateUser', 'UserController@updateUser')->name('user/updateUser');


Route::get('/home', 'HomeController@index')->name('home');
Route::post('file','HomeController@store')->name('file');
Route::get('home/getFiles', 'HomeController@getFiles')->name('home/getFiles');
Route::post('home/deleteInfoFile', 'HomeController@deleteInfoFile')->name('home/deleteInfoFile');
Route::post('home/notificationUserNew', 'HomeController@notificationUserNew')->name('home/notificationUserNew');


// 'tenant
Route::get('tenant', 'HomeController@tenant')->name('tenant');

// Recaudos
Route::get('recaudo/getRecaudos', 'RecaudoController@getRecaudos')->name('recaudo/getRecaudos');
Route::get('recaudo/pdf','RecaudoController@export_pdf')->name('recaudo/pdf');
Route::post('recaudo/pdf','RecaudoController@export_pdf')->name('recaudo_pdf');
//Route::get('/recaudo/pdf', ['as'=>'/recaudo/pdf','data'=>'RecaudoController@export_pdf']);
//Route::get('download-pdf/', ['as'=>'download-pdf','uses'=>'UserController@downloadPDF']);
Route::get('/download', 'RecaudoController@download_pdf')->name('/download');
