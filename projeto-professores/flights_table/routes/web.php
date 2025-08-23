<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/produtos', [ProductController::class, 'index']);

Route::get('/', function () {
    return redirect('/produtos');
});