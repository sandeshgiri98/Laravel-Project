<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
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
    return view('registration.home');
});


Route::get('/product',[ProductController::class, 'index'])-> name('product.index');
Route::get('/product/create',[ProductController::class, 'create'])-> name('product.create');
Route::post('/product',[ProductController::class, 'store'])-> name('product.store');

Route::get('/viewing',[RegistrationController::class , 'view'])->name('registration.register');
Route::get('/registration/register',[RegistrationController::class , 'index'])->name('registration.register');
Route::post('/registration',[RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/login',[RegistrationController::class , 'logon'])->name('reg.login');
Route::get('/registration/delete/{id}',[RegistrationController::class, 'delete'])->name('red.delete');
Route::get('/registration/edit/{id}',[RegistrationController::class, 'edit'])->name('red.edit');
Route::post('/registration/update/{id}',[RegistrationController::class, 'update'])->name('red.update');
