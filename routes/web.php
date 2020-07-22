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
// Unauthenticated Routes

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/invest-with-us', function () {
    return view('invest');
})->name('invest');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');


Route::get('/our-brokers-review', function () {
    return view('review');
})->name('review');

Route::get('/contact-page', function () {
    return view('contact');
})->name('contact');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Auth pages
Route::get('/login', function () {
    return view('backend.login');
})->name('login');

Route::get('/register', function () {
    return view('backend.register.index');
})->name('register');

Route::get('/password', function () {
    return view('backend.password.forget');
})->name('password');

Route::get('/password/reset', function () {
    return view('backend.password.reset');
})->name('passwordReset');


// backend codes
Route::prefix('/admin')->group(function () {
    // dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


    // invest crud
     Route::resource('invest', 'InvestController');

    // withdraw crud
     Route::resource('withdraw', 'WithdrawController');
     
    // transaction crud
     Route::resource('transaction', 'TransactionController');

     // Referral crud
     Route::resource('referral', 'ReferralController');

    // settings create and update profile
    Route::get('/setting', 'SettingsController@index')->name('setting');


      
});
