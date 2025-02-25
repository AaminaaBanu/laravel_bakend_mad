<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\AppointmentController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/categories', [ServiceController::class, 'getCategories']);
Route::get('/services/{categoryId?}', [ServiceController::class, 'getServicesByCategory']);
Route::post('/appointments', [AppointmentController::class, 'store']);
Route::get('/appointments/{userid}', [AppointmentController::class, 'getAppointmentsByUser']);

