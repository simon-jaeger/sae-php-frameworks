<?php
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/debug', [MetaController::class, 'debug']);
Route::get('/meta/now', [MetaController::class, 'now']);
Route::post('/meta/echo', [MetaController::class, 'echo']);
Route::post('/meta/reverse', [MetaController::class, 'reverse']);
Route::post('/meta/sum', [MetaController::class, 'sum']);
Route::post('/meta/pythagoras', [MetaController::class, 'pythagoras']);
Route::post('/meta/fahrenheit', [MetaController::class, 'fahrenheit']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  Route::get('/user', [UserController::class, 'show']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'destroy']);

  Route::get('/notes', [NotesController::class, 'index']);
  Route::post('/notes', [NotesController::class, 'create']);
  Route::patch('/notes', [NotesController::class, 'update']);
  Route::delete('/notes', [NotesController::class, 'destroy']);
  Route::post('/notes/setTags', [NotesController::class, 'setTags']);

  Route::get('/tasks', [TasksController::class, 'index']);
  Route::post('/tasks', [TasksController::class, 'create']);
  Route::patch('/tasks', [TasksController::class, 'update']);
  Route::delete('/tasks', [TasksController::class, 'destroy']);

  Route::get('/tags', [TagsController::class, 'index']);
  Route::post('/tags', [TagsController::class, 'create']);
  Route::patch('/tags', [TagsController::class, 'update']);
  Route::delete('/tags', [TagsController::class, 'destroy']);

  Route::get('/uploads', [UploadsController::class, 'index']);
  Route::post('/uploads', [UploadsController::class, 'create']);
  Route::delete('/uploads', [UploadsController::class, 'destroy']);

  Route::post('/admin/impersonate', [AdminController::class, 'impersonate']);
  Route::post('/admin/unimpersonate', [AdminController::class, 'unimpersonate']);
});

