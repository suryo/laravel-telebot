<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', [App\Http\Controllers\TelegramBotController::class, 'messages'])->name('messages');

Route::get('messages/{id}', [App\Http\Controllers\TelegramBotController::class, 'sendMessages'])->name('messages');
