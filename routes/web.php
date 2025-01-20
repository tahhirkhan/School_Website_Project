<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/school-vision', function () {
    return view('school-vision');
});

Route::get('/school-history', function () {
    return view('school-history');
});

Route::get('/pre-primary', function () {
    return view('school_levels.pre-primary');
});
