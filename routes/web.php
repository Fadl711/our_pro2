<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/ ',[PagesController::class,'wel']);
Route::get('/home',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
