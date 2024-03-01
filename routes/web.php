<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\addmedic;
use App\Http\Controllers\salescontroller;
use App\Http\Controllers\logincontroller;



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

Route::get('/',[logincontroller::class,'viewlogin'])->name('viewlogin');
Route::post('/',[logincontroller::class,'userlogin'])->name('userlogin');

Route::get('/register',[logincontroller::class,'viewform'])->name('viewform');
Route::post('/register',[logincontroller::class,'userregister'])->name('userregister');

Route::get('/addmedic',[addmedic::class,'index'])->name('addmedic');
Route::post('/addmedic',[addmedic::class,'store'])->name('addmedicstore');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/orders', [productcontroller::class, 'showDropdown'])->name('dropdown.show');
Route::post('/orders', [salescontroller::class, 'store'])->name('sales');


