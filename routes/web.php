<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route for the homepage
Route::view('/', 'homepage-1');

// Routes for other views
Route::view('/404', '404');
Route::view('/about', 'about');
Route::view('/academics', 'academics');
Route::view('/contact', 'contact');
Route::view('/events-single', 'events-single');
Route::view('/events', 'events');
Route::view('/excursion', 'excursion');
Route::view('/excursions-single', 'excursions-single');
Route::view('/gallery', 'gallery');
Route::view('/homepage-1', 'homepage-1');
Route::view('/homepage-2', 'homepage-2');
Route::view('/homepage-3', 'homepage-3');
Route::view('/news-single', 'news-single');
Route::view('/news', 'news');
Route::view('/schedule', 'schedule');
Route::view('/sign-in', 'sign-in');
Route::view('/sign-up', 'sign-up');
Route::view('/teachers-single', 'teachers-single');
Route::view('/teachers', 'teachers');
