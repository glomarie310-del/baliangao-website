<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/know-baliangao', function () {
    return view('know-baliangao');
});

Route::get('/tourism', function () {
    return view('tourism');
});

Route::get('/offices', function () {
    return view('offices');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/transparency', function () {
    return view('transparency');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

