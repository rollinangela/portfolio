<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/resume', 'resume');
Route::view('/contact', 'contact');