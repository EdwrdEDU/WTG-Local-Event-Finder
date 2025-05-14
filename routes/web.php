<?php
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('landing');});
Route::get('/home', function () {return view('homepage');})->name('homepage');
Route::get('/create-account', function () {return view('account.create');});
Route::get('/login', function () {return view('account.login');});
Route::get('/create-events', function () {return view('events.create');});
Route::get('/contacts', function () {return view('contacts.index');});
Route::get('/help-center', function () {return view('helpcenter.index');});
Route::post('/register', [AccountController::class, 'store'])->name('account.store');
Route::post('/login', [AccountController::class, 'login'])->name('account.login');