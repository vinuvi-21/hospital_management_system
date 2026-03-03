<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book-appoinment', function() {
    return view('components.appoinment.appoinment');
}
)->name('appoinments.book');
