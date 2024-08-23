<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


// reading/ displaying tasks
Route::get('/', [TaskController::class, 'display']);


// create tasks
Route::get('/create-task', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store']);

// update tasks
Route::patch('/update/{id}', [TaskController::class, 'update']);

// delete tasks
Route::delete('/delete/{id}', [TaskController::class, 'delete']);
