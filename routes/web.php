<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
 

Route::get('/', [AdController::class, 'index'])->name('welcome');
Route::get('/single-ad/{id}', [AdController::class, 'singleAd'])->name('welcome.singleAd');
Route::post('/single-ad/{id}send-message', [AdController::class, 'sendMessage'])->name('welcome.sendMessage');

Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'addDeposit'])->name('home.addDeposit');
Route::post('/home/add-deposit', [App\Http\Controllers\HomeController::class, 'storeDeposit']);
Route::get('/home/new-ad', [App\Http\Controllers\HomeController::class, 'newAd'])->name('home.newAd');
Route::get('/home/show-message', [App\Http\Controllers\HomeController::class, 'showMessage'])->name('home.showMessage');
Route::get('/home/show-message/reply', [App\Http\Controllers\HomeController::class, 'replyMessage'])->name('home.replyMessage');
Route::post('/home/show-message/reply', [App\Http\Controllers\HomeController::class, 'storeReply'])->name('home.storeReply');
Route::post('/home/new-ad', [App\Http\Controllers\HomeController::class, 'storeAd'])->name('home.storeAd');
Route::get('/home/singleAd/{id}', [App\Http\Controllers\HomeController::class, 'singleAd'])->name('home.singleAd');
Route::get('/home/singleAd/{id}/edit', [App\Http\Controllers\HomeController::class, 'editAd'])->name('home.editAd');
Route::post('/home/singleAd/{id}/edit', [App\Http\Controllers\HomeController::class, 'updateAd'])->name('home.updateAd');
Route::get('/home/singleAd/{id}/delete', [App\Http\Controllers\HomeController::class, 'delete']);