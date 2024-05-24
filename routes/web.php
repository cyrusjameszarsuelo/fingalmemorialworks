<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\OrderTypeController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/create/{tab?}', [OrderController::class, 'create']);

Route::get('/',[UserController::class, 'index']);

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/edit/{id}',[UserController::class, 'edit']);
Route::get('/users/create',[UserController::class, 'create']);
Route::post('createUser',[UserController::class, 'store'])->name('createUser');
Route::post('updateUser/{id}',[UserController::class, 'update'])->name('updateUser');

Route::get('branches',[BranchController::class, 'index']);
Route::get('/branches/create',[BranchController::class, 'create']);
Route::post('/createBranches',[BranchController::class, 'store'])->name('createBranches');
Route::get('/branches/edit/{id}',[BranchController::class, 'edit']);
Route::post('/updateBranches/{id}',[BranchController::class, 'update'])->name('updateBranches');

Route::get('document-types',[DocumentTypeController::class, 'index']);

Route::get('account-types',[AccountTypeController::class, 'index']);

Route::get('order-types',[OrderTypeController::class, 'index']);

Route::get('payment-types',[PaymentTypeController::class, 'index']);

Route::get('categories',[CategoryController::class, 'index']);

// Customer
Route::resource('customer', CustomerController::class);


