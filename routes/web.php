<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/now', [MetaController::class, 'now']);

Route::get('/tweets', [TweetsController::class, 'index']);
Route::post('/tweets', [TweetsController::class, 'create']);
Route::patch('/tweets', [TweetsController::class, 'update']);
Route::delete('/tweets', [TweetsController::class, 'delete']);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/self', [UsersController::class, 'self'])->middleware('auth');

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');
