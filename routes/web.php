<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbController;
Route::get('/', function () {
    return view('welcome');
});
Route:: get('/db', [dbController::class,'index']);
Route:: post('/db',[dbController::class,'show']);
Route::get('/dbshow', [dbController::class, 'showdb']);
