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

Route::get('/process', function () {
    return view('process');
});

Route::get('/simplifieddiagram', function () {
    return view('simplifieddiagram');
});

Route::get('/rawmaterial', function () {
    return view('rawmaterial');
});

Route::get('/refinery', function () {
    return view('refinery');
});

Route::get('/acidplant', function () {
    return view('/acidplant');
});

Route::get('/supportfacility', function () {
    return view('/supportfacility');
});

Route::get('/product', function () {
    return view('/product');
});

Route::get('/environmental', function () {
    return view('/Enviromental');
});


Route::get('/csr', function () {
    return view('/csr');
});


Route::get('/magazine', function () {
    return view('/magazine');
});


Route::get('/news', function () {
    return view('/news');
});


Route::get('/product1', function () {
    return view('/product1');
});

Route::get('/product2', function () {
    return view('/product2');
});

Route::get('/product3', function () {
    return view('/product3');
});

Route::get('/product4', function () {
    return view('/product4');
});

Route::get('/product5', function () {
    return view('/product5');
});

Route::get('/product6', function () {
    return view('/product6');
});



Route::get('/en', function () {
    return view('enwelcome');
});


Route::get('/aboutus-en', function () {
    return view('enAboutUs');
});

Route::get('/managementsystem-en', function () {
    return view('enManagementSystem');
});

Route::get('/award&sertification-en', function () {
    return view('enAward&SertificationNew');
});

Route::get('/jobopportunity-en', function () {
    return view('enJobOpportunity');
});

Route::get('/overview-en', function () {
    return view('enOverview');
});


Route::get('/timeline-en', function () {
    return view('enTimeline');
});

Route::get('/visionmission-en', function () {
    return view('enVision&Mission');
});

Route::get('/gallery-en', function () {
    return view('engallery');
});

Route::get('/news-en', function () {
    return view('ennews');
});

Route::get('/berita1-en', function () {
    return view('news/berita1-en');
});

Route::get('/berita2-en', function () {
    return view('news/berita2-en');
});

Route::get('/berita3-en', function () {
    return view('news/berita3-en');
});


Route::get('/berita4-en', function () {
    return view('news/berita4-en');
});

Route::get('/process-en', function () {
    return view('enprocess');
});

Route::get('/simplifieddiagram-en', function () {
    return view('ensimplifieddiagram');
});

Route::get('/rawmaterial-en', function () {
    return view('enrawmaterial');
});

Route::get('/refinery-en', function () {
    return view('enrefinery');
});

Route::get('/acidplant-en', function () {
    return view('/enacidplant');
});

Route::get('/supportfacility-en', function () {
    return view('/ensupportfacility');
});

Route::get('/product-en', function () {
    return view('/enproduct');
});

Route::get('/environmental-en', function () {
    return view('/enEnviromental');
});


Route::get('/csr-en', function () {
    return view('/encsr');
});


Route::get('/magazine-en', function () {
    return view('/enmagazine');
});


Route::get('/news-en', function () {
    return view('/ennews');
});

Route::get('/product1-en', function () {
    return view('/enproduct1');
});

Route::get('/product2-en', function () {
    return view('/enproduct2');
});

Route::get('/product3-en', function () {
    return view('/enproduct3');
});

Route::get('/product4-en', function () {
    return view('/enproduct4');
});

Route::get('/product5-en', function () {
    return view('/enproduct5');
});

Route::get('/product6-en', function () {
    return view('/enproduct6');
});


Route::get('/contohproduk', function () {
    return view('/contohproduk');
});


Route::get('/test', function () {
    return view('/00test');
});


Route::get('/jobpage-en', function () {
    return view('/enjobpage');
});

Route::get('/education-en', function () {
    return view('/eneducation');
});


Route::get('/health-en', function () {
    return view('/enhealth');
});

Route::get('/socialeconomy-en', function () {
    return view('/ensocialeconomy');
});

Route::get('/environmentcsr-en', function () {
    return view('/enenviromentcsr');
});