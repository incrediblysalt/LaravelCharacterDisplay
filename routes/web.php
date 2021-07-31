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

# Main page -> Welcome
Route::get('/', function () {
    return view('welcome');
});

# Home page -> My page home
Route::get('/home', function () {
	return view('home');
});

# Contact page -> Contact information
Route::get('/contact', function () {
	return view('contact');
});

# About page -> About me
Route::get('/about', function () {
	return view('about');
});