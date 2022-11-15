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
    return view('pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/properties', function () {
    return view('pages.property');
})->name('properties');

Route::get('/property', function () {
    return view('pages.property-detail');
})->name('property');
