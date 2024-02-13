<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminuserController;
use App\Http\Controllers\ProductoperationController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. 
*/

Route::get('/home', function () {
    // return view('welcome');
    return view('FrontEndSection/home');
});
Route::get('/dashboard', function () {
    return view('BackEndSection/dashboard');
});
Route::get('/admin-login', [AdminuserController::class, 'create']);
Route::post('/registration', [AdminuserController::class, 'store']);
Route::post('/loginadmin', [AdminuserController::class, 'adminlogin']);
Route::get('/dashboard', [AdminuserController::class, 'AuthSignIN']);
Route::get('/logout', [AdminuserController::class, 'AuthLogout']);

Route::get('/productCategory', [ProductoperationController::class, 'create']);
Route::post('/addCategory', [ProductoperationController::class, 'store']);



Route::get('/productSubCategory', [ProductoperationController::class, 'createSubCat']);
Route::post('/addSubCategory', [ProductoperationController::class, 'storeSubCat']);

Route::get('/product', [ProductController::class, 'index']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::post('/categorydropdown', [ProductController::class, 'create']);








