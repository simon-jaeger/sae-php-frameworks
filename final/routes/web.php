<?php
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PicturesController;
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

  Route::get('/user', [UserController::class, 'read']);
  Route::patch('/user', [UserController::class, 'update']);
  Route::delete('/user', [UserController::class, 'delete']);

  Route::get('/notes', [NotesController::class, 'read']);
  Route::post('/notes', [NotesController::class, 'create']);
  Route::patch('/notes', [NotesController::class, 'update']);
  Route::delete('/notes', [NotesController::class, 'delete']);
  Route::post('/notes/setTags', [NotesController::class, 'setTags']);

  Route::get('/tags', [TagsController::class, 'read']);
  Route::post('/tags', [TagsController::class, 'create']);
  Route::patch('/tags', [TagsController::class, 'update']);
  Route::delete('/tags', [TagsController::class, 'delete']);

  Route::get('/pictures', [PicturesController::class, 'read']);
  Route::get('/pictures/{id}', [PicturesController::class, 'show']);
  Route::post('/pictures', [PicturesController::class, 'create']);
  Route::delete('/pictures', [PicturesController::class, 'delete']);

  Route::post('/admin/impersonate', [AdminController::class, 'impersonate']);
  Route::post('/admin/unimpersonate', [AdminController::class, 'unimpersonate']);

  Route::get('/tasks', [TasksController::class, 'read']);
  Route::post('/tasks', [TasksController::class, 'create']);
  Route::patch('/tasks', [TasksController::class, 'update']);
  Route::delete('/tasks', [TasksController::class, 'delete']);
});
