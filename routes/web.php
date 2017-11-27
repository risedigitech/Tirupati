<?php

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
    $page = 'index';
    return view('home', compact('page'));
});

Route::get('/about', function () {
    $page = 'pages';
    return view('about', compact('page'));
});

Route::get('/facility', function () {
    $page = 'pages';
    return view('facility', compact('page'));
});

Route::get('/gallery', function () {
    $page = 'pages';
    return view('gallery', compact('page'));
});

Route::get('/contact', function () {
    $page = 'pages';
    return view('contact', compact('page'));
});
