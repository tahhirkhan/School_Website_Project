<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/test-nav', function () {
    return view('nav_test.nav-test');
});
