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
    return view('landing');
});

Route::get('/home', function () {
    return view('homepage');
})->name('homepage');


Route::get('/create-account', function () {
    return view('account.create');
});

Route::get('/login', function () {
    return view('account.login');
});

Route::get('/create-events', function () {
    return view('events.create');
});

Route::get('/contacts', function () {
    return view('contacts.index');
});

Route::get('/help-center', function () {
    return view('helpcenter.index');
});