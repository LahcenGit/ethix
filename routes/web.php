<?php

use App\Http\Controllers\InvestorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserDocumentController;
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
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-file', function () {
    return view('add-files');
});



Route::resource('/dashboard-admin/properties',PropertyController::class);
Route::resource('/dashboard-admin/users',InvestorController::class);
Route::get('/show-file/{id}',[App\Http\Controllers\InvestorController::class,'showFile']);
Route::get('/downolad-file/{link}',[App\Http\Controllers\InvestorController::class,'downloadFile']);
Route::resource('/app/add-file',UserDocumentController::class);

Route::get('/app/properties', [App\Http\Controllers\InvestorController::class, 'properties']);
Route::get('/app', [App\Http\Controllers\InvestorController::class, 'dashboard']);
Route::resource('/app/profil', ProfilController::class);

Route::get('/app/detail-property/{id}', [App\Http\Controllers\InvestorController::class, 'detailProperty']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
