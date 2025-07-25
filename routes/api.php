<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\EmailVerificationController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function () {
    return User::all();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware('signed')->name('verification.verify');

// // Logout
// Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
//     $request->user()->tokens()->delete();

//     return response()->json(['message' => 'Sesión cerrada']);
// });
