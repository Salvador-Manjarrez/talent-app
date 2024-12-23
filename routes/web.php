<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LookController;
use App\Http\Controllers\TagController;

/* All Related Posts */

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/details/{job}', [JobController::class, 'show']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth'); 

/* ========== TESTING NEW CREATE PAGES ======== */

Route::get('/jobs/create-t', [JobController::class, 'create_t'])->middleware('auth');
Route::post('/jobs/create-t', [JobController::class, 'store_t'])->middleware('auth'); 
Route::get('/jobs/create-c', [JobController::class, 'create_c'])->middleware('auth');
Route::post('/jobs/create-c', [JobController::class, 'store_c'])->middleware('auth'); 
Route::get('/jobs/create-p', [JobController::class, 'create_p'])->middleware('auth');
Route::post('/jobs/create-p', [JobController::class, 'store_p'])->middleware('auth'); 



Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

/* Browsing Specific Pages (LookController) */

Route::get('/about', [LookController::class, 'about']);
Route::get('/help', [LookController::class, 'help']);
Route::get('/crew', [LookController::class, 'crew']); 
Route::get('/talent', [LookController::class, 'talent']);
Route::get('/projects', [LookController::class, 'projects']);
Route::get('/jobs', [LookController::class, 'jobs']);

/*Post any of the 4 post options page */

Route::get('/posting', [LookController::class, 'posting'])->middleware('auth'); 


/* Register, Login, Logout */

Route::middleware('guest')->group(function(){

    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');



/* RECOVER PASSWORD TEST:

When receiving a request for a password reset on email, configure the code below with the email of the user, 
entering the mail used to login and the new desired password in the 'example@mail.com & new_password' then visit route to gen  */

Route::get('temporary-password-reset', function() {
    $user = App\Models\User::where('email', 'example@mail.com')->first();
    $user->password = Hash::make('new_password');
    $user->save();
 
    return 'Success!';
});


/* PW VIEW */

Route::get('/reset', [LookController::class, 'reset']);


