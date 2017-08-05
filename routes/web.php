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


// Host
// ec2-54-243-107-66.compute-1.amazonaws.com
// Database
// d3rdu1uade4cgo
// User
// gblncdnpeyalmp
// Port
// 5432
// Password
// f6790882e739216710f6fd7aff3c7e85dbee83be7aac8fce87787f67085c8996
// URI
// postgres://gblncdnpeyalmp:f6790882e739216710f6fd7aff3c7e85dbee83be7aac8fce87787f67085c8996@ec2-54-243-107-66.compute-1.amazonaws.com:5432/d3rdu1uade4cgoHeroku CLI
// heroku pg:psql postgresql-dimensional-49271 --app clickersone



// postgres://gblncdnpeyalmp:f6790882e739216710f6fd7aff3c7e85dbee83be7aac8fce87787f67085c8996@ec2-54-243-107-66.compute-1.amazonaws.com:5432/d3rdu1uade4cgo


Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});