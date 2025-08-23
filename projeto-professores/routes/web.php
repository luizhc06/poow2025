<?php

use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::resource('professores', ProfessorController::class);