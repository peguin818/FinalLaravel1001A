<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;

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

/*Route::get('productList', [ProductController::class, 'index']);
Route::get('themeList', [ThemeController::class, 'index']);
Route::get('productAdd', [ProductController::class, 'add']);
Route::get('themeAdd', [ThemeController::class, 'add']);
Route::post('productSave', [ProductController::class, 'save']);
Route::post('themeSave', [ThemeController::class, 'save']);
Route::get('productEdit/{id}', [ProductController::class, 'edit']);
Route::post('productUpdate', [ProductController::class, 'update']);
Route::get('themeEdit/{id}', [ThemeController::class, 'edit']);
Route::post('themeUpdate', [ThemeController::class, 'update']);
Route::get('productDelete/{id}', [ProductController::class, 'delete']);
Route::get('themeDelete/{id}', [ThemeController::class, 'delete']);*/

Route::get('/', [WebsiteController::class, 'index']);
Route::get('featured', [WebsiteController::class, 'featured']);
Route::get('products', [WebsiteController::class, 'products']);
Route::get('contact', [WebsiteController::class, 'contact']);
Route::get('about', [WebsiteController::class, 'about']);
Route::get('signin', [UserController::class, 'signin']);
Route::post('userSignin', [UserController::class, 'userSignin']);
Route::get('signup', [UserController::class, 'signup']);
Route::post('userSignup', [UserController::class, 'userSignup']);
Route::get('signout', [UserController::class, 'userSignout']);

Route::get('admin/', [WebsiteController::class, 'adminIndex']);
Route::get('admin/productList', [WebsiteController::class, 'productList']);
Route::get('admin/productAdd', [WebsiteController::class, 'productAdd']);
Route::get('admin/productEdit/{id}', [WebsiteController::class, 'productEdit']);
Route::get('admin/productUpdate', [WebsiteController::class, 'productUpdate']);
Route::get('admin/productDelete/{id}', [WebsiteController::class, 'productDelete']);
Route::post('admin/productSave', [WebsiteController::class, 'productSave']);
Route::get('admin/userList', [UserController::class, 'index']);
