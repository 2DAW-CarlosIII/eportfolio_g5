<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FamiliaProfesionalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'codigo.required' => 'El código de la familia profesional es obligatorio.',
            'nombre.required' => 'El nombre de la familia profesional es obligatorio.',
            'descripcion.nullable' => 'La descripción de la familia profesional no es válida.',
        ];
    }
}

