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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {
     $data = request()->all();
     echo "email: ". $data['email'].'<br>';
     echo "message: ".$data['body'];
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/login', function () {
    return view('auth.passwords.login');
});
Route::post('/login', function () {
    $logdata = request()->all();
    echo "email: ". $logdata['email'].'<br>';
    echo "message: ".$logdata['password'];
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
