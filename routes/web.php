<?php
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/debug', [MetaController::class, 'debug']);
Route::get('/meta/now', [MetaController::class, 'now']);
Route::post('/meta/echo', [MetaController::class, 'echo']);

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
});
