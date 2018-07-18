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

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
/*Route::post('/contact', function () {
     $data = request()->all();
     echo "Email: ". $data['email'].'<br>';
     echo "Subject: ". $data['subject'].'<br>';
     echo "Message: ".$data['body'];
}); */
Route::post('/contact', 'PageController@store')->name('contact.store');
Route::post('/viewmsg', 'PageController@viewmsg')->name('viewmsg');
Route::get('/thanks/{email}/{sub}/{msg}', 'PageController@thanks')->name('thanks');
Route::get('/register', 'PageController@register')->name('register');
Route::get('/login', 'PageController@login')->name('login');
Auth::routes();
