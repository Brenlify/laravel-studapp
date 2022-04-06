<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student', [StudentController::class, 'getData']);
Route::post('/student', [StudentController::class, 'addData']);
Route::get('/student/{id}', [StudentController::class, 'getDataByID']);
Route::put('/student/{student}', [StudentController::class, 'updateData']);
Route::delete('/student/{student}', [StudentController::class, 'deleteData']);