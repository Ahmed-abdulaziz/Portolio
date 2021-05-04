<?php

use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\portfoliocontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route as RoutingRoute;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[aboutcontroller::class,'index'])->name('about');
Route::get('/portfolio',[portfoliocontroller::class,'index'])->name('portfolio');

    Route::get('/contact',[contactcontroller::class,'index'])->name('contact');
    Route::post('/store',[contactcontroller::class,'store'])->name('contact.store');


Route::get('/blog',[blogcontroller::class,'index'])->name('blog');
