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



Route::get('welcome', function () {
    return view('welcome');
});

Route::get('demo', function () {
    return view('demo');
});

Route::get('header', function () {
    return view('header');
});


Route::get('login', function () {
    return view('login');
});

Route::get('reg_1', function () {
    return view('reg_1');
});

Route::get('reg_2', function () {
    return view('reg_2');
});

Route::get('reg_3', function () {
    return view('reg_3');
});

Route::get('/user/login', function () {
    return view('user.login');
});

Route::get('/form/in1/{im_no}', 'IN_PrnController@in1')->name('form.in1.im_no');

Route::get('/form/in2/{im_no}', 'IN_PrnController@in2')->name('form.in2.im_no');

Route::get('/form/sub/{im_no}', 'IN_PrnController@index')->name('form.sub.im_no');


//Route::get('IN_1/{im_no}/form', 'IN_PrnController@in')->name('IN_1.im_no.form');

//Route::get('/home/form/IN_1', ['as' => 'form', 'uses' => 'IN_PrnController@in']);

Route::get('IN_1', ['as' => 'IN_1', 'uses' => 'IN_PrnController@in']);

//Route::get('/home/IN_3', array('uses' => 'IN_PrnController@in3'));
//Route::get('/form/IN_2', array('uses' => 'IN_PrnController@in2'));

Route::get('IN_2', ['as' => 'IN_2', 'uses' => 'IN_PrnController@in3']);

Route::get('fomrat_II', ['as' => 'format_II', 'uses' => 'IN_PrnController@in_app']);
 


Route::get('admin/dashboard/update/{im_no}', 'IM_RegController@update')->name('admin.dashboard.update.im_no');

Route::get('admin/dashboard/reject/{im_no}', 'IM_RegController@reject')->name('admin.dashboard.reject.im_no');

//Route::resource('admin', 'IM_RegController');



//Route::get('status', 'IM_RegController@update');
Route::get('/home/reg_3', array('uses' => 'IM_RegController@reg3'));
Route::get('/home/reg_2', array('uses' => 'IM_RegController@create'));
Route::get('/home/reg_1', array('uses' => 'IM_RegController@index'));
//Route::get('/home/form/{im_no}/IN_1', array('uses' => 'IN_PrnController@in'));



Route::post('/home/registered', array('uses' => 'IM_RegController@store'));

Route::get('home', function () {
    return view('home');
});

Route::get('format_I_1', function () {
    return view('format_I_1');
});

Route::get('format_I_2', function () {
    return view('format_I_2');
});

Route::get('format_I_3', function () {
    return view('format_I_3');
});

Route::get('format_III_1', function () {
    return view('format_III_1');
});

Route::get('format_III_2', function () {
    return view('format_III_2');
});

Route::get('JIT-3', function () {
    return view('JIT_VIEW_3');
});

Route::get('format_IV', function () {
    return view('format_IV');
});

Route::get('in_approval', function () {
    return view('in_approval');
});

Route::get('format_II', function () {
    return view('format_II');
});


Route::get('admin_manf_rate', function () {
    return view('admin_manf_rate');
});

Route::get('mainlogin', function () {
    return view('mainlogin');
});



Route::get('/admin', 'HomeController@admin');

Route::get('/admin/dashboard', array('uses' => 'IM_RegController@mst_im_list'));

//Route::get('/admin/approved', array('uses' => 'IM_RegController@approve'));

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', array('uses' => 'HomeController@index') );
