<?php

use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\RetriveController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RetriveController::class, 'selectAllRows']);

Route::get('/single', [RetriveController::class, 'selectSingleRow']);

Route::get('/find', [RetriveController::class, 'findRow']);
Route::get('/columnName', [RetriveController::class, 'selectColumn']);
Route::get('/columnMultiName', [RetriveController::class, 'selectMultiColumn']);
Route::get('/specificData', [RetriveController::class, 'specificColumnData']);

Route::get('/count', [AggregatesController::class, 'countRow']);
Route::get('/max', [AggregatesController::class, 'maxRow']);
Route::get('/min', [AggregatesController::class, 'minRow']);
Route::get('/avg', [AggregatesController::class, 'avgRow']);
