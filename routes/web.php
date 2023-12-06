<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userPageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('login');
});

Route::get('/login1', [UserAuthController::class,'loginTes']);


// Route::get('/home', [homeController::class,'index']);
// Route::get("/user", [userPageController::class,'index']);
// Route::get('/database', [adminPageController::class,'index']);

Route::get('/login', [UserAuthController::class,'index'])->name('index');
Route::get('/register', [UserAuthController::class,'register'])->name('register');
Route::post('/loginProcess', [UserAuthController::class,'loginProcess'])->name('loginProcess');
Route::get('/logout', [UserAuthController::class,'logout'])->name('logout');

Route::post('/registerProcess',[UserAuthController::class,'registerProcess'])->name('registerProcess');




    Route::middleware(['check_login'])->group(function () {
        // Dashboard
        Route::group(['middleware' => ['check_login:admin']], function () {
            Route::resource('admin', adminPageController::class);
        });
        Route::group(['middleware' => ['check_login:user']], function () {
            Route::resource('user', userPageController::class);
        });
    });







