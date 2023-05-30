<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/debug', [MetaController::class, 'debug']);
Route::get('/meta/now', [MetaController::class, 'now']);
Route::post('/meta/echo', [MetaController::class, 'echo']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::get('/user', [UserController::class, 'read']);
  Route::patch('/user', [UserController::class, 'update']);

  Route::get('/notes', [NotesController::class, 'read']);
  Route::post('/notes', [NotesController::class, 'create']);
  Route::patch('/notes', [NotesController::class, 'update']);
  Route::delete('/notes', [NotesController::class, 'delete']);
});


