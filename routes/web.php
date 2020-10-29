<?php

use App\Indox;
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
    $inboxes = Indox::paginate(10);
    return view('welcome', compact('inboxes'));
});

Route::post('/message', 'IndoxController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
