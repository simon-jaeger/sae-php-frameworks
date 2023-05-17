<?php
use App\Http\Controllers\TweetsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/now', [MetaController::class, 'now']);

Route::get('/tweets', [TweetsController::class, 'index']);
Route::post('/tweets', [TweetsController::class, 'create']);
