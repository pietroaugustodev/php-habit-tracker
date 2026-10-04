<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Override;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */

    public function messages()
    {
        return [
            'email.unique' => 'Email ja cadastrado!',
            'email.required' => 'Email necessário',
            'name.required' => 'Nome necessário',
            'password.confirmed' => 'Senhas diferentes!'
        ];
    }

    public function rules(): array
    {
        //  dd([
        //     'default' => config('database.default'),
        //     'database' => DB::connection()->getDatabaseName(),
        //     'users' => DB::table('users')->count(),
        // ]);
        return [
            'name' => 'required | max: 100 | string',
            'email' => [
    'required',
    'email',
    'string',
    'max:50',
    Rule::unique('users', 'email'),
],
            'password' => 'required|max: 30|confirmed'

        ];
    }
}
