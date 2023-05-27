<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\BuyerOrdersController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\superAdminController;
use App\Http\Middleware\ensureUserIsBuyer;
use App\Http\Middleware\ensureUserisSeller;
use App\Http\Middleware\ensureUserIsSuperadmin;
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

Route::get('/', [indexController::class, "index"])->name('index');




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
         Route::post('update-order-status', [BuyerController::class, 'update_status'])->name('update_order_status');
         Route::post('delete-order', [BuyerController::class, 'destroy'])->name('delete_buyer_order');


    });




    
    // seller Routes
    Route::middleware(ensureUserisSeller::class)->group(function(){

        Route::get('seller', [SellerController::class, 'index'])->name('seller_index');
        Route::post('submit-bid', [SellerController::class, 'submit_bid'])->name('submit_bid');


    });




    // SuperAdmin Routes


    Route::middleware(ensureUserIsSuperadmin::class)->group(function(){

    Route::get('superadmin', [superAdminController::class, 'index'])->name('superadmin_index');
    Route::get('all_buyers', [superAdminController::class, 'all_buyers'])->name('all_buyers');
    Route::get('all_sellers', [superAdminController::class, 'all_sellers'])->name('all_sellers');
    Route::delete('admin_user_destroy/{id}', [superAdminController::class, 'admin_user_destroy'])->name('admin_user_destroy');
    Route::post('admin_update_user', [superAdminController::class, 'admin_update_user'])->name('admin_update_user');



    // reivew section [superadmin]
    Route::get('superadmin_orders', [superAdminController::class, 'superadmin_orders'])->name('superadmin_orders');
    Route::post('super_admin_user_update_additional_info', [superAdminController::class, 'super_admin_user_update_additional_info'])->name('super_admin_user_update_additional_info');


    // superadmin order section
    Route::get('superadmin_orders_which_open', [superAdminController::class, 'superadmin_orders_which_open'])->name('superadmin_orders_which_open');
    Route::get('superadmin_orders_edit/{id}', [BuyerOrdersController::class, 'superadmin_orders_edit_index'])->name('superadmin_orders_edit');
    Route::post('superadmin_order_update', [BuyerOrdersController::class, 'superadmin_orders_edit'])->name('superadmin_order_update');
    Route::post('superadmin_update_order_status', [BuyerOrdersController::class, 'superadmin_update_order_status'])->name('superadmin_update_order_status');
    Route::delete('superadmin_delete_order/{id}', [BuyerOrdersController::class, 'superadmin_delete_order'])->name('superadmin_delete_order');



    });






});
