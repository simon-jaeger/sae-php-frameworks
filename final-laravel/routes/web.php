<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/now', [MetaController::class, 'now']);
Route::get('/meta/debug', [MetaController::class, 'debug']);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/self', [UsersController::class, 'self'])->middleware('auth');

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/notes', [NotesController::class, 'index']);
Route::post('/notes', [NotesController::class, 'create']);
Route::patch('/notes', [NotesController::class, 'update']);
Route::delete('/notes', [NotesController::class, 'delete']);

