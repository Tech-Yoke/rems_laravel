<?php
use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AgentController;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\transactionController;



Route::post("register",[UserController::class,"register"]);
Route::post("login",[UserController::class,"login"]);
Route::post("logout",[UserController::class,"logout"])->middleware('auth:sanctum');
Route::apiResource('users',UserController::class);
 Route::apiResource("clients",ClientController::class);
 Route::apiResource("agents",AgentController::class);


