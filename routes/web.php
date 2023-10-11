<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;


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


//home
Route::get('/', function () { return view('welcome'); })->name('home');

//players
Route::get('/all_player', [PlayerController::class,'index'])->name('player.index');
Route::get('/create_player', [PlayerController::class,'create'])->name('player.create');
Route::post('/store_player', [PlayerController::class,'store'])->name('player.store');
Route::get('/edit_player/{id}', [PlayerController::class,'edit'])->name('player.edit');
Route::post('/update_player/{id}', [PlayerController::class,'update'])->name('player.update');
Route::get('/destroy_player/{id}', [PlayerController::class,'destroy'])->name('player.destroy');

//buyers
Route::get('/all_buyer', [BuyerController::class,'index'])->name('buyer.index');
Route::get('/create_buyer', [BuyerController::class,'create'])->name('buyer.create');
Route::post('/store_buyer', [BuyerController::class,'store'])->name('buyer.store');
Route::get('/edit_buyer/{id}', [BuyerController::class,'edit'])->name('buyer.edit');
Route::post('/update_buyer/{id}', [BuyerController::class,'update'])->name('buyer.update');
Route::get('/destroy_buyer/{id}', [BuyerController::class,'destroy'])->name('buyer.destroy');

//servers
Route::get('/all_server', [ServerController::class,'index'])->name('server.index');
Route::get('/show_server/{id}', [ServerController::class,'show'])->name('server.show');
Route::get('/add_order/{server_id}', [OrderController::class,'create'])->name('order.create');
Route::get('/create_server', [ServerController::class,'create'])->name('server.create');
Route::post('/store_server', [ServerController::class,'store'])->name('server.store');
Route::get('/edit_server/{id}', [ServerController::class,'edit'])->name('server.edit');
Route::post('/update_server/{id}', [ServerController::class,'update'])->name('server.update');
Route::get('/destroy_server/{id}', [ServerController::class,'destroy'])->name('server.destroy');

//batches
Route::post('/store_batch', [BatchController::class,'store'])->name('batch.store');
Route::get('/edit_batch/{id}', [BatchController::class,'edit'])->name('batch.edit');
Route::post('/update_batch/{id}', [BatchController::class,'update'])->name('batch.update');
Route::get('/destroy_batch/{id}', [BatchController::class,'destroy'])->name('batch.destroy');

//orders
Route::get('show_order/{id}', [OrderController::class,'show'])->name('order.show');
Route::get('/add_batch/{order_id}', [BatchController::class,'create'])->name('batch.create');
Route::post('/store_order', [OrderController::class,'store'])->name('order.store');
Route::get('/edit_order/{id}', [OrderController::class,'edit'])->name('order.edit');
Route::post('/update_order/{id}', [OrderController::class,'update'])->name('order.update');
Route::get('/destroy_order/{id}', [OrderController::class,'destroy'])->name('order.destroy');

//payments
Route::get('/all_payment', [PaymentController::class,'index'])->name('payment.index');
Route::get('/create_payment', [PaymentController::class,'create'])->name('payment.create');
Route::post('/store_payment', [PaymentController::class,'store'])->name('payment.store');
Route::get('/edit_payment/{id}', [PaymentController::class,'edit'])->name('payment.edit');
Route::post('/update_payment/{id}', [PaymentController::class,'update'])->name('payment.update');
Route::get('/destroy_payment/{id}', [PaymentController::class,'destroy'])->name('payment.destroy');
