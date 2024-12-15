<?php

use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/listing-bills',[BillController::class,"listing"])->name('home');
Route::get('/create',[BillController::class,"createInvoice"]);
Route::post('/store', [BillController::class, 'storeInvoice']); // Store new invoice
Route::get('/edit/{id}',[BillController::class,"editInvoice"]);
Route::post('/update/{id}',[BillController::class,"updateInvoice"]);
Route::get('/delete/{id}',[BillController::class,"deleteInvoice"]);

Route::get('/export-users', [BillController::class, 'exportUsers'])->name('export.users');

Route::post('/import-bills', [BillController::class, 'import'])->name('import.bills');



