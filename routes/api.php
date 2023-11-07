<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    // Define your protected API routes here

    // Route::get('/user', function (Request $request) {
    //     return $request->user();
    // });
    // dd(NewsController::class);
    Route::apiResource('news', NewsController::class);
    Route::apiResource('category', CategoryController::class);
    Route::get('news/latest', [NewsController::class, 'getLatestNews']);
    Route::get('news/category/{category}', [NewsController::class, 'getNewsByCategory']);
    // Add more protected routes here
    // For example:
    // Route::get('/profile', 'ProfileController@index');
    // Route::post('/posts', 'PostController@store');
    // ...
});
