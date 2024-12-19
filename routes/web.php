<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('users.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users/movies', function () {
    return view('users.movies');
})->name('user.movies');

Route::get('/users/series', function () {
    return view('users.series');
})->name('user.series');

Route::get('/admin', function () {
    return view('admins.adminView');
})->name('admin.adminView');

Route::get('/admin/create', function () {
    return view('admins.adminCreate');
})->name('admin.adminCreate');

// Route::controller(AdminController::class)->group(function () {
//     Route::get('/admin', 'adminView')->name('admin.adminView');
//     Route::get('/admin/create', 'adminCreate')->name('admin.adminCreate');
// });