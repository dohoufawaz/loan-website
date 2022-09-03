<?php

use Illuminate\Support\Facades\Route;
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

/**Route::get('/', function () {
    return view('welcome');
});**/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//dmin route
Route::prefix('admin')->middleware(['auth','is_admin'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
    //clients route
    Route::controller(App\Http\Controllers\admin\ClientController::class)->group(function(){
        Route::get('client','index');
    });
   
});


//template route
Route::get('/', [App\Http\Controllers\template\templateController::class, 'index'])->name('index');
Route::get('service', [App\Http\Controllers\template\templateController::class, 'service'])->name('service');
Route::get('contact', [App\Http\Controllers\template\templateController::class, 'contact'])->name('contact');
Route::post('contactform', [App\Http\Controllers\template\templateController::class, 'contactstore']);
Route::get('about', [App\Http\Controllers\template\templateController::class, 'about'])->name('about');
Route::get('apply', [App\Http\Controllers\template\templateController::class, 'apply'])->name('apply');
Route::post('applyform', [App\Http\Controllers\template\templateController::class, 'store']);
Route::get('detail', [App\Http\Controllers\template\templateController::class, 'detail'])->name('detail');
Route::get('login', [App\Http\Controllers\template\templateController::class, 'login'])->name('login');
