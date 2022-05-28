<?php

use App\Http\Controllers\ProspectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get("/users", [UserController::class, "index"]);
Route::get("/users/{user}", [UserController::class, "show"]);
Route::put("/users/{user}", [UserController::class, "update"]);
Route::delete("/users/{user}", [UserController::class, "destroy"]);

Route::apiResource("prospects", [ProspectController::class]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
