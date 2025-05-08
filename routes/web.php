<?php

use Illuminate\Support\Facades\Route;

// Default Route (Landing Page)
Route::get('/', function () {
    return view('welcome'); // Landing page
});

// Combined Login & Signup Route
Route::get('/loginsignup', function () {
    return view('auth.loginsignup'); // This points to resources/views/auth/loginsignup.blade.php
});

// NEW: Properties Page
Route::get('/properties', function () {
    return view('properties');
})->name('properties'); // Named route

// NEW: Pending Bookings Page
Route::get('/pending', function () {
    return view('bookings.pending');
})->name('pending'); // Named route

// NEW: Accepted Bookings Page
Route::get('/accepted', function () {
    return view('bookings.accepted');
})->name('accepted'); // Named route

// NEW: Calendar Page
Route::get('/calendar', function () {
    return view('calendar'); // Points to resources/views/calendar.blade.php
})->name('calendar'); // Named route
