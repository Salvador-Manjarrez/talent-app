<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LookController;
use App\Http\Controllers\TagController;

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/details/{job}', [JobController::class, 'show']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth'); 


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::get('/about', [LookController::class, 'about']);
Route::get('/help', [LookController::class, 'help']);
Route::get('/crew', [LookController::class, 'crew']); 
Route::get('/talent', [LookController::class, 'talent']);
Route::get('/projects', [LookController::class, 'projects']);
Route::get('/jobs', [LookController::class, 'jobs']);



Route::middleware('guest')->group(function(){

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
