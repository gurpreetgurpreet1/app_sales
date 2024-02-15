<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
Auth::routes();

//LeadController
Route::get('/dashboard',[LeadController::class,'index']);
Route::get('/lead',[LeadController::class,'form']);
Route::post('/lead',[LeadController::class,'add']);
Route::get('/delete/{id}',[LeadController::class,'deleteLead']);
Route::get('/lead/{id}',[LeadController::class,'edit']);
Route::post('/lead/{id}',[LeadController::class,'update']);
//SourceController
Route::get('/source',[SourceController::class,'index']);
Route::post('/source',[SourceController::class,'add']);
//CategoryController
Route::get('/category',[CategoryController::class,'index']);
Route::post('/category',[CategoryController::class,'add']);
// Route::get('/product',[CategoryController::class,'detail']);
//ProductController
Route::get('/product',[ProductController::class,'index']);
Route::post('/product',[ProductController::class,'add']); 
Route::get('/delete/{id}',[ProductController::class,'delete']);
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'updateProduct']);
