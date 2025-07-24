<?php

namespace App\Actions\Veterinary;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'required|string|max:255',
            'telephone' => 'required|string|min:10|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'second_last_name' => $input['second_last_name'],
            'telephone' => $input['telephone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
