<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class habitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required|string|max:250|unique:habits,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Precisa ser informado um nome para o habito',
            'name.max' => 'O nome do habito precisa ter no maximo 250 caracteres',
            'name.string' => 'O nome do habito precisa ser string',
            'name.unique' => 'Habito com o mesmo nome ja cadastrado'
        ];
    }
}
