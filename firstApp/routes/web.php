<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


//regisrer
Route::get('/', [StudentController::class, "register"]);
Route::post('/register', [StudentController::class, "registerHandler"]);

Route::get('/students', [StudentController::class, "index"]);
