<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\BuyerOrdersController;
use App\Http\Controllers\indexController;
use App\Http\Middleware\ensureUserIsBuyer;
use App\Models\buyerOrders;
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
})->name('index');




// login and register Routes

Route::post('registration', [authController::class, 'register_post'])->name('register_post');

// End of login and register Routes







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




    // Update Additional info
    Route::get('additional-details', [indexController::class, 'additional_deatils'])->name('additional_deatils');
    Route::post('user_update_additional_info', [authController::class, 'user_update_additional_info'])->name('user_update_additional_info');





    // Routes for both

    Route::get('home', [indexController::class, 'redirectToHome'])->name('user_home');




    // buyer Routes
    Route::middleware(ensureUserIsBuyer::class)->group(function(){

        Route::get('buyer', [BuyerController::class, 'index'])->name('buyer_index');
        Route::get('add-electricity', [BuyerController::class, 'add_electricity'])->name('add_electricity');
         Route::get('create-bid', [BuyerController::class, 'create'])->name('buyer_create');
         Route::post('bidAdd', [BuyerOrdersController::class, 'store'])->name('bidAdd');


    });








});
