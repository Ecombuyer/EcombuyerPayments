<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomepageController;

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

Auth::routes();
/*------------------------------------------
--------------------------------------------
Home page Routes
--------------------------------------------
--------------------------------------------*/


Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');
Route::get('/aboutpage', [HomepageController::class, 'aboutpage'])->name('aboutpage');


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/otp', [UsersController::class, 'otp'])->name('user.otp');
    Route::get('/mailverify', [UsersController::class, 'mailverify'])->name('user.mailverify');
    // Route::post('/mailconfirm', [UsersController::class, 'mailconfirm'])->name('user.mailconfirm');
    Route::post('/otppost', [UsersController::class, 'otppost'])->name('otppost');
    Route::post('/mailconfirm', [UsersController::class, 'mailconfirm'])->name('user.mailconfirm');

    Route::get('/cancel', [UsersController::class, 'cancel'])->name('cancel');

    Route::middleware(['check_user_pin_and_steps'])->group(function () {


        Route::get('/home', [HomeController::class, 'index'])->name('home');

        // Route::GET('/load-more-products', [OrderController::class, 'loadMoreProducts'])->name('load_more_products');
        Route::GET('/share', [OrderController::class, 'share'])->name('share');
        Route::GET('/preview', [OrderController::class, 'preview'])->name('preview');
        Route::POST('/store', [OrderController::class, 'store'])->name('orders.store');
        Route::GET('/{id}/destory', [OrderController::class, 'destroy'])->name('orders.destroy');
        Route::GET('/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
        Route::POST('/{id}/update', [OrderController::class, 'update'])->name('orders.update');
        Route::GET('/index', [OrderController::class, 'index'])->name('orders.index');
        Route::GET('/create', [OrderController::class, 'create'])->name('orders.create');
        Route::GET('/{product_id}/{name}/show', [OrderController::class, 'show'])->name('orders.show');
        Route::GET('/buynow/{id}', [OrderController::class, 'buynow'])->name('orders.buynow');
        Route::POST('/placeorder', [OrderController::class, 'placeorder'])->name('orders.placeorder');
        Route::GET('/transaction/{id}', [OrderController::class, 'transaction'])->name('orders.transaction');

        // Route::GET('/success/{res}', [OrderController::class, 'success'])->name('orders.success');
        Route::get('/success', [OrderController::class, 'success'])->name('orders.success');
        Route::GET('/failed', [OrderController::class, 'cancel'])->name('orders.failed');
        Route::get('user/mobileview', [OrderController::class, 'mobileview'])->name('user.mobileview');
        Route::post('user/callback', [OrderController::class,'handleCallback'])->name('payment.callback');
        Route::post('/filter', [OrderController::class,'filter'])->name('orders.filter');

    });
});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::GET('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::GET('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::GET('/admin/paymentmethod', [PaymentController::class, 'paymentmethod'])->name('admin.paymentmethod');
    Route::POST('/admin/paymentactive', [PaymentController::class, 'paymentactive'])->name('admin.paymentactive');
    // Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');
});

/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

// Route::resource('orders', OrderController::class)->names('orders');


