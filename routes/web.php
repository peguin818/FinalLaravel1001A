<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;

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

Route::get('admin', [AdminController::class, 'index'])->middleware('isLoggedIn');
Route::get('admin/signin', [AdminController::class, 'signin'])->middleware('alreadyLoggedIn');
Route::post('adminSignin', [AdminController::class, 'adminSignin']);
Route::get('adminSignout', [AdminController::class, 'adminSignout'])->middleware('isLoggedIn');

Route::get('admin/productList', [ProductController::class, 'index'])->middleware('isLoggedIn');
Route::get('admin/productAdd', [ProductController::class, 'add'])->middleware('isLoggedIn');
Route::post('admin/productSave', [ProductController::class, 'save'])->middleware('isLoggedIn');
Route::get('admin/productEdit/{id}', [ProductController::class, 'edit'])->middleware('isLoggedIn');
Route::post('admin/productUpdate', [ProductController::class, 'update'])->middleware('isLoggedIn');
Route::get('admin/productDelete/{id}', [ProductController::class, 'delete'])->middleware('isLoggedIn');

Route::get('admin/themeList', [ThemeController::class, 'index'])->middleware('isLoggedIn');
Route::get('admin/themeAdd', [ThemeController::class, 'add'])->middleware('isLoggedIn');
Route::post('admin/themeSave', [ThemeController::class, 'save'])->middleware('isLoggedIn');
Route::get('admin/themeEdit/{id}', [ThemeController::class, 'edit'])->middleware('isLoggedIn');
Route::post('admin/themeUpdate', [ThemeController::class, 'update'])->middleware('isLoggedIn');
Route::get('admin/themeDelete/{id}', [ThemeController::class, 'delete'])->middleware('isLoggedIn');

Route::get('admin/userList', [UserController::class, 'index'])->middleware('isLoggedIn');
Route::get('admin/userAdd', [UserController::class, 'add'])->middleware('isLoggedIn');
Route::post('admin/userSave', [UserController::class, 'save'])->middleware('isLoggedIn');
Route::get('admin/userEdit/{id}', [UserController::class, 'edit'])->middleware('isLoggedIn');
Route::post('admin/userUpdate', [UserController::class, 'update'])->middleware('isLoggedIn');
Route::get('admin/userDelete/{id}', [UserController::class, 'delete'])->middleware('isLoggedIn');

Route::get('admin/adminList', [AdminController::class, 'adminList'])->middleware('isLoggedIn');
Route::get('admin/adminAdd', [AdminController::class, 'add'])->middleware('isLoggedIn');
Route::post('admin/adminSave', [AdminController::class, 'save'])->middleware('isLoggedIn');
Route::get('admin/adminEdit/{id}', [AdminController::class, 'edit'])->middleware('isLoggedIn');
Route::post('admin/adminUpdate', [AdminController::class, 'update'])->middleware('isLoggedIn');
Route::get('admin/adminDelete/{id}', [AdminController::class, 'delete'])->middleware('isLoggedIn');
