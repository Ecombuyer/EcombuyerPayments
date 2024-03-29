<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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



    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
