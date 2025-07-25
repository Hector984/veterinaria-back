<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService\UserService;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{

    public function __construct(protected UserService $userService)
    {
        
    }

    public function verify(Request $request, $id, $hash)
    {
        // Check if the request has a valid signature
        if (! $request->hasValidSignature()) {
        return response()->json(['message' => 'Enlace inválido o expirado.'], 403);
    }

    $user = $this->userService->findOrFail($id);

    // Verificar el hash
    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        return response()->json(['message' => 'Hash inválido.'], 403);
    }

    // Si ya está verificado, respondemos
    if ($user->hasVerifiedEmail()) {
        return response()->json(['message' => 'El correo ya ha sido verificado.']);
    }

    $user->markEmailAsVerified();

    return response()->json(['message' => 'Correo verificado con éxito.']);
    }
}
