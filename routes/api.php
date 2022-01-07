<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\CelanaController;
use App\Http\Controllers\BajuWanitaController;
use App\Http\Controllers\CelanaWanitaController;

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

Route::get('getUser', [UserController::class, 'getUser']);
Route::get('getBaju', [BajuController::class, 'getBaju']);
Route::get('getCelana', [CelanaController::class, 'getCelana']);

Route::get('bajuWanita', [BajuWanitaController::class, 'bajuWanita']);
Route::get('celanaWanita', [CelanaWanitaController::class, 'celanaWanita']);