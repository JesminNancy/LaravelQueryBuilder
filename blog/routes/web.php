<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryBuilderController;
use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\MergeController;
use App\Http\Controllers\JoinController;

//Query Builder Retrieve Data

Route::get('/showdata', [queryBuilderController::class, 'showAllRows']);
Route::get('/showsingledata', [queryBuilderController::class, 'showOneRows']);
Route::get('/finddata', [queryBuilderController::class, 'findRows']);
Route::get('/onecolumn', [queryBuilderController::class, 'selectOneCol']);
Route::get('/multicolumn', [queryBuilderController::class, 'selectmultiCol']);
Route::get('/specificdata', [queryBuilderController::class, 'specificData']);


//Query Builder Aggregates

Route::get('/countrow', [AggregatesController::class, 'countRow']);
Route::get('/max', [AggregatesController::class, 'maxRow']);
Route::get('/min', [AggregatesController::class, 'minRow']);
Route::get('/avg', [AggregatesController::class, 'avgRow']);

//Query Builder Selects

Route::get('/unique', [queryBuilderController::class, 'selectUnique']);
Route::get('/singleselect', [queryBuilderController::class, 'singleselectColumn']);
Route::get('/multiselect', [queryBuilderController::class, 'multiselectColumn']);

//Query Builder Merge

Route::get('/merge', [MergeController::class, 'mergeData']);

//Query Builder Left-join Right-join

Route::get('/leftjoin', [JoinController::class, 'leftJoinData']);
Route::get('/rightjoin', [JoinController::class, 'rightJoinData']);