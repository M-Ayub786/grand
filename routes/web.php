<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[CompanyController::class,'index1']);
Route::get('about',[CompanyController::class,'about1']);
Route::get('layout',[CompanyController::class,'layout1']);
Route::get('side-bar',[CompanyController::class,'side1']);
Route::get('contact',[CompanyController::class,'contact1']);
