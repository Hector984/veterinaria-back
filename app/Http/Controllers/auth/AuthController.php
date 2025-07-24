<?php

namespace App\Http\Controllers\auth;

use App\Actions\Veterinary\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request, CreateNewUser $createNewUser)
    {

        // Create the user
        $user = $createNewUser->create($request->validated());

        // Dispara el evento para enviar el correo de verificación
        event(new Registered($user));

        // Return a response
        return response()->json([
            'message' => 'Usuario registrado. Revisa tu correo para verificar tu cuenta.', 
            'user' => new UserResource($user)], 201);
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Usuario o contraseña invalidos'], 401);
        }

        // Generate a token for the user
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return the token
        return response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the request
        $request->user()->currentAccessToken()->delete();

        // Return a response
        return response()->json(['message' => 'Logged out successfully']);
    }
}
