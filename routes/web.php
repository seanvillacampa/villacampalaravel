<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;

Route::get('/', function(){
return redirect('/products');

});

Route::get('/products', [ProductController::class, 'index']);

Route::post('/products_form', [ProductController::class, 'store']);

Route::get('/employee', [EmployeeController::class, 'empindex']);

Route::post('/employeeview', [EmployeeController::class, 'empstore']);

Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::put('/products/{id}', [ProductController::class, 'update']);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'catindex']);

Route::post('/c_products', [CategoryController::class, 'catstore']);

Route::get('/category/{id}/catedit', [CategoryController::class, 'catedit']);

Route::put('/category/{id}', [CategoryController::class, 'catupdate']);

Route::delete('/category/{id}', [CategoryController::class, 'catdestroy']);

