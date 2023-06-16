<?php
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UploadsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/debug', [MetaController::class, 'debug']);
Route::get('/meta/now', [MetaController::class, 'now']);
Route::post('/meta/echo', [MetaController::class, 'echo']);
Route::post('/meta/reverse', [MetaController::class, 'reverse']);
Route::post('/meta/sum', [MetaController::class, 'sum']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::get('/users', [UsersController::class, 'read']);
  Route::get('/users/self', [UsersController::class, 'self']);
  Route::patch('/users', [UsersController::class, 'update']);

  Route::get('/notes', [NotesController::class, 'read']);
  Route::post('/notes', [NotesController::class, 'create']);
  Route::patch('/notes', [NotesController::class, 'update']);
  Route::delete('/notes', [NotesController::class, 'delete']);

  Route::get('/tasks', [TasksController::class, 'read']);
  Route::post('/tasks', [TasksController::class, 'create']);
  Route::patch('/tasks', [TasksController::class, 'update']);
  Route::delete('/tasks', [TasksController::class, 'delete']);

  Route::get('/uploads', [UploadsController::class, 'read']);
  Route::post('/uploads', [UploadsController::class, 'create']);
  Route::delete('/uploads', [UploadsController::class, 'delete']);
});
