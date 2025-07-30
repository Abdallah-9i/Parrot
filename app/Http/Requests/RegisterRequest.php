<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => ['nullable','image','max:2048'],
            'name' => ['required', 'max:32', 'min:3'],
            'email'=> ['required','email','max:40','unique:users,email'],
            'password'=> ['required', 'min:8','max:22', 'confirmed'],
            'password_confirmation'=>['required', 'same:password'],
        ];
    }
}
