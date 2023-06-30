<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaController;

Route::get('/meta/ping', [MetaController::class, 'ping']);
