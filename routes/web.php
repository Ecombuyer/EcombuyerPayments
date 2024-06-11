<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\GoogleAuthController;


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

/*google api login*/
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
Route::post('/userregister', [GoogleAuthController::class, 'userregister'])->name('userregister');

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
        // Route::GET('/{product_id}/{name}/show', [OrderController::class, 'show'])->name('orders.show');
        // // Route::GET('/buynow/{id}', [OrderController::class, 'buynow'])->name('orders.buynow');
        // Route::POST('/buynow', [OrderController::class, 'buynow'])->name('orders.buynow');
        // Route::POST('/placeorder', [OrderController::class, 'placeorder'])->name('orders.placeorder');
        Route::GET('/transaction/{id}', [OrderController::class, 'transaction'])->name('orders.transaction');

        // Route::GET('/success/{res}', [OrderController::class, 'success'])->name('orders.success');
        Route::get('/success', [OrderController::class, 'success'])->name('orders.success');
        Route::GET('/failed', [OrderController::class, 'cancel'])->name('orders.failed');
        Route::get('user/mobileview', [OrderController::class, 'mobileview'])->name('user.mobileview');
        Route::post('user/callback', [OrderController::class, 'handleCallback'])->name('payment.callback');
        Route::post('/filter', [OrderController::class, 'filter'])->name('orders.filter');
        Route::post('/transactionfilter', [OrderController::class, 'transactionfilter'])->name('orders.transactionfilter');

        Route::get('/profile', [OrderController::class, 'profile'])->name('user.profile');
        Route::post('/addprofile', [OrderController::class, 'addprofile'])->name('user.addprofile');

        Route::post('/add_adhar_pan', [OrderController::class, 'add_adhar_pan'])->name('user.add_adhar_pan');
        Route::post('/bank_details', [OrderController::class, 'bank_details'])->name('user.bank_details');

        Route::get('/usercomplaints', [OrderController::class, 'usercomplaints'])->name('user.complaints');

        Route::get('/usercomplaintsform', [OrderController::class, 'usercomplaintsform'])->name('user.complaintsform');

        // Route::get('/usercomplaintsbooked', [OrderController::class,'usercomplaintsbooked'])->name('user.complaintsbooked');
        Route::post('/usercomplaintsbooked', [OrderController::class, 'usercomplaintsbooked'])->name('user.complaintsbooked');

        Route::post('/usercomplaintsstatus', [OrderController::class, 'usercomplaintsstatus'])->name('user.complaintsstatus');
    });
});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::GET('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::GET('/admin/transactions', [AdminController::class, 'transaction'])->name('admin.transactions');
    Route::POST('/admin/transaction/filters', [AdminController::class, 'transactionfilter'])->name('admin.transactionfilters');
    Route::GET('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::POST('/admin/users/filters', [AdminController::class, 'userfilter'])->name('admin.userfilters');
    Route::GET('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::POST('/admin/products/filters', [AdminController::class, 'productfilters'])->name('admin.productsfilters');
    Route::GET('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::GET('/admin/paymentmethod', [PaymentController::class, 'paymentmethod'])->name('admin.paymentmethod');
    Route::POST('/admin/paymentactive', [PaymentController::class, 'paymentactive'])->name('admin.paymentactive');
    Route::GET('/admin/complaints', [AdminController::class, 'usercomplaints'])->name('admin.complaints');
    Route::POST('/admin/complaints/filters', [AdminController::class, 'complaintsfilter'])->name('admin.complaintsfilter');
    Route::GET('/admin/revenue', [AdminController::class, 'revenue'])->name('admin.revenue');
    Route::POST('/admin/revenue/filters', [AdminController::class, 'revenuefilter'])->name('admin.revenuefilter');
    Route::GET('/admin/notification', [AdminController::class,'adminnotification'])->name('admin.notification');
    Route::GET('/admin/reports', [AdminController::class,'reports'])->name('admin.reports');
    Route::POST('/admin/reports/filters', [AdminController::class,'reportsfilter'])->name('admin.reportsfilter');
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
Route::any('/returnurl', [HomeController::class,'returnurl'])->name('returnurl');