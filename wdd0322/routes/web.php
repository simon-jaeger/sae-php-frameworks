<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;

use App\Http\Controllers\NotesController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
Route::post('/meta/echo', [MetaController::class, 'echo']);
Route::post('/meta/reverse', [MetaController::class, 'reverse']);
Route::post('/meta/sum', [MetaController::class, 'sum']);
Route::post('/meta/pythagoras', [MetaController::class, 'pythagoras']);
Route::post('/meta/fahrenheit', [MetaController::class, 'fahrenheit']);

Route::get('/notes', [NotesController::class, 'read']);
Route::post('/notes', [NotesController::class, 'create']);
Route::patch('/notes', [NotesController::class, 'update']);
Route::delete('/notes', [NotesController::class, 'delete']);


//$controller = new NotesController();
//$controller->read();
