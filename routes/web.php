<?php

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
    return view('home');
});


Route::get('/login', function () {
    return view('user.login');
});

Route::get('/signup', function () {
    return view('user.signup');
});

Route::get('/admin/login', function () {
    return view('admin.adminLog');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/dashboard', function () {
    return view('admin.adminDashboard');
});

Route::get('/admin/dashboard/users', function () {
    return view('admin.userControl');
});

Route::get('/admin/dashboard/schedule', function () {
    return view('admin.scheduleControl');
});

Route::get('/admin/dashboard/route', function () {
    return view('admin.routeControl');
});

Route::get('/admin/dashboard/operator', function () {
    return view('admin.operatorControl');
});

Route::get('/admin/dashboard/payment', function () {
    return view('admin.paymentControl');
});