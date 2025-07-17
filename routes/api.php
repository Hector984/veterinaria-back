<?php

use App\Http\Controllers\auth\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function() {
    return User::all();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Login
// Route::post('/login', function (Request $request) {
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required|string',
//     ]);

//     $user = User::where('email', $request->email)->first();

//     if (! $user || ! Hash::check($request->password, $user->password)) {
//         throw ValidationException::withMessages([
//             'email' => ['Credenciales incorrectas.'],
//         ]);
//     }

//     $token = $user->createToken('token')->plainTextToken;

//     return response()->json([
//         'access_token' => $token,
//         'token_type' => 'Bearer',
//     ]);
// });

// // Logout
// Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
//     $request->user()->tokens()->delete();

//     return response()->json(['message' => 'Sesión cerrada']);
// });
