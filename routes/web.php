<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserviewController;
use App\Http\Controllers\ManagerviewController;
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

Route::get('/homepage', [HomepageController::class, 'homepage'])->name('homepage');
Route::get('/aboutpage', [HomepageController::class, 'aboutpage'])->name('aboutpage');


/**view user page */
Route::get('viewuser', [UserviewController::class, 'viewuser'])->name('viewuser');
Route::get('managerview', [ManagerviewController::class, 'managerview'])->name('manager');


// Route::get('viewuser', [UserviewController::class, 'viewuser'])->name('viewuser');

Auth::routes();
/*------------------------------------------
--------------------------------------------
Home page Routes
--------------------------------------------
--------------------------------------------*/




/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
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
