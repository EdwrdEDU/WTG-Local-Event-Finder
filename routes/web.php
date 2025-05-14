<?php
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

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

Route::post('/account', [AccountController::class, 'store'])->name('account.store');

Route::post('/interests/save', [App\Http\Controllers\InterestController::class, 'save'])->name('interests.save');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::post('/login', [AccountController::class, 'login'])->name('login.post');


Route::get('/account/create', function () {
    return view('account.create'); 
});

Route::get('/events', [EventController::class, 'fetchEvents']);
Route::get('/events/category/{category}', [EventController::class, 'fetchEvents']);
