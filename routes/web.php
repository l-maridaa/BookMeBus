<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\userController;
use App\Http\Controllers\dashboardController;

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
    return view('home');
})->name('home');


Route::get('/login', [userController::class,'show_login_form'])->name('login');
Route::post('/login', [userController::class,'process_login'])->name('login');
Route::get('/signup', [userController::class,'show_signup_form'])->name('signup');
Route::post('/signup', [userController::class,'process_signup']);
Route::post('/logout', [userController::class,'logout'])->name('logout');

Route::group(["middleware"=>["auth"]], function(){

    Route::get('user/profile', [dashboardController::class, 'show_dashboard']);
    Route::get('user/bookedHistory', [dashboardController::class, 'show_booked_list']); 
});

?>