<?php

use App\Http\Controllers\MealRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('meals' , [MealRequestController::class, 'index']);