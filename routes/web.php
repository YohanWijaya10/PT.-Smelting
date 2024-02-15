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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/aboutus', function () {
    return view('AboutUs');
});

Route::get('/managementsystem', function () {
    return view('ManagementSystem');
});

Route::get('/award&sertification', function () {
    return view('Award&SertificationNew');
});

Route::get('/jobopportunity', function () {
    return view('JobOpportunity');
});

Route::get('/overview', function () {
    return view('Overview');
});


Route::get('/timeline', function () {
    return view('Timeline');
});

Route::get('/visionmission', function () {
    return view('Vision&Mission');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/berita1', function () {
    return view('news/berita1');
});

Route::get('/berita2', function () {
    return view('news/berita2');
});

Route::get('/berita3', function () {
    return view('news/berita3');
});


Route::get('/berita4', function () {
    return view('news/berita4');
});