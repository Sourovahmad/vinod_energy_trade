<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// login and register Routes

Route::post('registration', [authController::class, 'register_post'])->name('register_post');
Route::get('additional-details', [indexController::class, 'additional_deatils'])->name('additional_deatils');
Route::post('user_update_additional_info', [authController::class, 'user_update_additional_info'])->name('user_update_additional_info');

// End of login and register Routes










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
