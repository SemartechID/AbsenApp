<?php

use Illuminate\Support\Facades\Route;

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
Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
        $message->subject('Mailgun and Laravel are awesome!');
        $message->from('verify@absen.semartech.id');
		$message->to('raqaelf@student.uns.ac.id');
	});
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
