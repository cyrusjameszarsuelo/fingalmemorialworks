<?php

use App\Http\Controllers\AuthController;
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

Route::group(['middleware'=> 'auth'], function(){

   Route::get('/order', [OrderController::class, 'index']);
	Route::get('/order/create/{tab?}', [OrderController::class, 'create']);
	Route::match(['get', 'post'], 'order/create/createGeneralDetails', [OrderController::class, 'createGeneralDetails'])->name("createGeneralDetails");
	// Route::get('/',[UserController::class, 'index']);
	
	Route::get('/users',[UserController::class, 'index']);
	Route::get('/users/edit/{id}',[UserController::class, 'edit']);
	Route::get('/users/create',[UserController::class, 'create']);
	Route::post('createUser',[UserController::class, 'store'])->name('createUser');
	Route::put('updateUser/{id}',[UserController::class, 'update'])->name('updateUser');
	Route::delete('deleteUser',[UserController::class, 'destroy'])->name('deleteUser');
	
	Route::get('branches',[BranchController::class, 'index']);
	Route::get('/branches/create',[BranchController::class, 'create']);
	Route::get('/branches/edit/{id}',[BranchController::class, 'edit']);
	Route::post('/createBranches',[BranchController::class, 'store'])->name('createBranches');
	Route::put('/updateBranches/{id}',[BranchController::class, 'update'])->name('updateBranches');
	Route::delete('deleteBranches',[BranchController::class,'destroy'])->name('deleteBranches');
	
	Route::get('document-types',[DocumentTypeController::class, 'index']);
	Route::get('document-types/create',[DocumentTypeController::class, 'create']);
	Route::get('document-types/edit/{id}',[DocumentTypeController::class, 'edit']);
	Route::post('createDocumentType',[DocumentTypeController::class, 'store'])->name('createDocumentType');
	Route::put('updateDocumentType/{id}',[DocumentTypeController::class, 'update'])->name('updateDocumentType');
	Route::delete('deleteDocumenttType',[DocumentTypeController::class, 'destroy'])->name('deleteDocumenttType');
	
	
	Route::get('account-types',[AccountTypeController::class, 'index']);
	Route::get('account-types/create',[AccountTypeController::class, 'create']);
	Route::get('account-types/edit/{id}',[AccountTypeController::class, 'edit']);
	Route::post('createAccountType',[AccountTypeController::class, 'store'])->name('createAccountType');
	Route::put('updateAccountType/{id}',[AccountTypeController::class,'update'])->name('updateAccountType');
	Route::delete('deleteAccounttType',[AccountTypeController::class,'destroy'])->name('deleteAccounttType');
	
	Route::get('order-types',[OrderTypeController::class, 'index']);
	Route::get('order-types/create',[OrderTypeController::class, 'create']);
	Route::get('order-types/edit/{id}',[OrderTypeController::class, 'edit']);
	Route::post('createOrderType',[OrderTypeController::class, 'store'])->name('createOrderType');
	Route::put('updateOrderType/{id}',[OrderTypeController::class,'update'])->name('updateOrderType');
	Route::delete('deleteOrderType',[OrderTypeController::class,'destroy'])->name('deleteOrderType');
	
	Route::get('payment-types',[PaymentTypeController::class, 'index']);
	Route::get('payment-types/create',[PaymentTypeController::class, 'create']);
	Route::get('payment-types/edit/{id}',[PaymentTypeController::class, 'edit']);
	Route::post('createPaymentType',[PaymentTypeController::class, 'store'])->name('createPaymentType');
	Route::put('updatePaymentType/{id}',[PaymentTypeController::class,'update'])->name('updatePaymentType');
	Route::delete('deletePaymentType',[PaymentTypeController::class,'destroy'])->name('deletePaymentType');
	
	Route::get('categories',[CategoryController::class, 'index']);
	Route::get('categories/create',[CategoryController::class, 'create']);
	Route::get('categories/edit/{id}',[CategoryController::class, 'edit']);
	Route::post('createCategories',[CategoryController::class, 'store'])->name('createCategories');
	Route::put('updateCategories/{id}',[CategoryController::class,'update'])->name('updateCategories');
	Route::delete('deleteCategory',[CategoryController::class,'destroy'])->name('deleteCategory');
	
	// Customer
	Route::resource('customer', CustomerController::class);

   // Logout
   Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware('guest')->group(function(){
   Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('authsubmit');
    
   Route::get("/", function(){
       return view("login");
    })->name("login");
   
    Route::get("/forgot-password", function(){
       return view("forgot-password");
    });
    Route::get("/contact-us", function(){
       return view("contact");
    });
});







