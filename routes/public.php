<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Hi";
});


// ROUTE METHODS
// GET, POST, PUT, PATCH, DELETE, OPTIONS

// REDIRECT ROUTE
Route::redirect('/old', '/public', 301);
// VIEW ROUTE
Route::view('/route', 'test', ['name' => "Nika"]);
// CHECK ROUTES
// php artisan route:list

// FALLBACK ROUTES, IF NOT MATCH ANY
Route::fallback(function () {
    return "...404...";
});
