<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/create', [UserController::class, 'create'])->name('usercreate');
Route::post('/store', [UserController::class, 'store'])->name('userstore');
Route::get('/{id}/edit', [UserController::class, 'edit'])->name('useredit');
Route::post('/{id}/update', [UserController::class, 'update'])->name('userupdate');
Route::get('/{id}/delete', [UserController::class, 'delete'])->name('userdelete');
