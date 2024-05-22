<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentTypesController;
use App\Http\Controllers\OrderTypeController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

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



Route::get('users',[UserController::class, 'index']);
Route::get('users/edit',[UserController::class, 'edit']);

Route::get('branches',[BranchController::class, 'index']);

Route::get('document-types',[DocumentTypesController::class, 'index']);

Route::get('account-types',[AccountTypeController::class, 'index']);

Route::get('order-types',[OrderTypeController::class, 'index']);

Route::get('payment-types',[PaymentTypeController::class, 'index']);

Route::get('categories',[CategoryController::class, 'index']);

