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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/helloworld',function(){
    return view("helloworld");
});
Route::get('/register',function(){
    return view("register");
});
Route::get('/home/getcookie',[
   'middleware' => 'Home:editor',
   'uses' => 'HomeController@getCookie',
]);
Route::get('/user/child',['as'=>'child',function(){
    return view("layouts.child");
}]);
Route::post('/login',[
    //'middlerware'=>'Login:editor',
    'uses'=>'LoginController@index',
]);
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::resource('home','HomeController');
Route::resource('student','StudentController');
