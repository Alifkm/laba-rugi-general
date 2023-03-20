<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\TransactionSourceController;

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

// REPORT CONTROLLER
Route::controller(ReportController::class)->group(function() {
  Route::get('/', 'index')->middleware('auth')->name('report.index');
  Route::get('/report', 'index')->middleware('auth')->name('report.index'); // report page
  Route::post('/report', 'filter')->middleware('auth')->name('report.filter'); // filter report
  Route::get('/report/chart', 'chartIndex')->middleware('auth')->name('chart.index'); // chart
  Route::post('/report/chart', 'chartFilter')->middleware('auth')->name('chart.filter'); // filter chart
});


// ADMIN CONTROLLER
Route::controller(AdminController::class)->group(function() {
  Route::get('/admin', 'index')->middleware('auth')->name('admin.index'); // get all admin
  Route::get('/admin/create', 'create')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.create'); // create admin form
  Route::post('/admin', 'store')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.store'); // store admin data
  Route::get('/admin/{admin}/edit', 'edit')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.edit'); // show admin edit form
  Route::put('/admin/{admin}', 'update')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.udpate'); // update admin data
  Route::get('/admin/{admin}', 'destroy')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.delete'); // delete admin data
});



// INCOME CONTROLLER
Route::controller(IncomeController::class)->group(function() {
  Route::get('/income', 'index')->middleware('auth')->name('income.index'); // all income
  Route::get('/income/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('income.create'); // create income form 
  Route::post('/income', 'store')->middleware(['thisIsAdmin', 'auth'])->name('income.store'); // store income data
  Route::get('/income/{income}/edit', 'edit')->middleware('auth')->name('income.edit'); // show income edit form
  Route::put('/income/{income}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('income.update'); // update income data
  Route::post('/income/request-delete', 'requestDelete')->middleware(['thisIsAdmin', 'auth'])->name('income.request-delete'); // approve transaction
  // Route::get('/income/{income}', 'destroy')->middleware(['thisIsAdmin', 'auth'])->name('income.delete'); // delete income data
});



// OUTCOME CONTROLLER
Route::controller(OutcomeController::class)->group(function() {
  Route::get('/outcome', 'index')->middleware('auth')->name('outcome.index'); // all outcome
  Route::get('/outcome/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('outcome.create'); // create outcome form
  Route::post('/outcome', 'store')->middleware(['thisIsAdmin', 'auth'])->name('outcome.store'); // store outcome data
  Route::get('/outcome/{outcome}/edit', 'edit')->middleware('auth')->name('outcome.edit'); // show outcome edit form
  Route::put('/outcome/{outcome}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('outcome.update'); // update outcome data
  Route::post('/outcome/request-delete', 'requestDelete')->middleware(['thisIsAdmin', 'auth'])->name('outcome.request-delete'); // approve transaction
  // Route::get('/outcome/{outcome}', 'destroy')->middleware('auth')->name('outcome.delete'); // delete outcome data
});



// TRANSACTION SOURCE CONTROLLER
Route::controller(TransactionSourceController::class)->group(function() {
  Route::get('/transaction-source', 'index')->middleware('auth')->name('transactionSource.index'); // get all transaction source
  Route::get('/transaction-source/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('transactionSource.create'); // create transaction source form
  Route::post('/transaction-source', 'store')->middleware(['thisIsAdmin', 'auth'])->name('transactionSource.store'); // store transaction source data
  Route::get('/transaction-source/{transactionSource}/edit', 'edit')->middleware('auth')->name('transactionSource.edit'); // show transaction source edit form
  Route::put('/transaction-source/{transactionSource}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('transactionSource.udpate'); // update transaction source data
  Route::get('/transaction-source/{transactionSource}', 'destroy')->middleware(['thisIsAdmin', 'auth'])->name('transactionSource.delete'); // delete transaction source data
});




// APPROVE CONTROLLER
Route::controller(ApprovalController::class)->group(function() {
  Route::get('/approval', 'index')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.index'); // get all approval
  Route::post('/approval/approve', 'approveTransaction')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.approved'); // approve transaction
  Route::post('/approval/decline', 'declineTransaction')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.decline'); // decline transaction
});


// CHANGE PASSWORD CONTROLLER 
Route::controller(ChangePasswordController::class)->group(function() {
  Route::get('/change-password', 'index')->middleware('auth')->name('changePassword.index'); // show password
  Route::post('/change-password', 'changePassword')->middleware('auth')->name('changePassword.update'); // change password
});

Auth::routes();
