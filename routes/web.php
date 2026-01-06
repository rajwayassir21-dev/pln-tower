<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
route::get('/login', function () {
    return view('page.loginPage');
});
route::get('/sistem', function () {
    return view('page.firstpage');
});
