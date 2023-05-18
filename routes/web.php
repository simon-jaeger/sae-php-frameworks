<?php
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::get('/meta/now', [MetaController::class, 'now']);

Route::get('/todos', [TodosController::class, 'index']);
Route::post('/todos', [TodosController::class, 'create']);
Route::patch('/todos', [TodosController::class, 'update']);
Route::delete('/todos', [TodosController::class, 'delete']);
