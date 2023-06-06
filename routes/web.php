<?php

use App\Http\Controllers\Planner\ChatController;
use App\Http\Controllers\Planner\DashboardController;
use App\Http\Controllers\Planner\EventController;
use App\Http\Controllers\Planner\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('planner')->group(function () {
        Route::middleware('verified')->group(function () {
            Route::get('/events', [EventController::class, 'index'])->name('events');
            Route::get('/chats', [ChatController::class, 'index'])->name('chats');
        });

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::post('/upload-dp', [ProfileController::class, 'uploadDP'])->name('dp.upload');
        Route::put('/bank-info', [ProfileController::class, 'updateBankInfo'])->name('bank-info.update');
    });
});


Route::get('test', function () {
    $message = "Hey, what's up everyone!";
    event(new \App\Events\SendMessageEvent($message));
    return "event fired";
});

Route::get('test2', function () {
    $chat_id = 4;
    $message = "Hi Jay";
    event(new \App\Events\SendPrivateMessageEvent($chat_id, $message));
    return "event fired";
});

require __DIR__.'/auth.php';
