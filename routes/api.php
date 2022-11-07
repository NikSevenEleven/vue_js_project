<?php

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

Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::get('/', [App\Http\Controllers\Person\IndexController::class, '__invoke']);
    Route::post('/', [App\Http\Controllers\Person\StoreController::class, '__invoke']);
    Route::patch('/{person}', [App\Http\Controllers\Person\UpdateController::class, '__invoke']);
    Route::delete('/{person}', [App\Http\Controllers\Person\DeleteController::class, '__invoke']);
});