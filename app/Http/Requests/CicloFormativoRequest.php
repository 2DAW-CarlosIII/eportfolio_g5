<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CicloFormativoRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'codigo_familia' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'grado' => ['required', 'in:basico,medio,superior'],
            'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
        ];
    }

    /** Mensajes propios, por campo y regla. */
    public function messages(): array
    {
        return [
            'codigo_familia.required' => 'El código de la familia profesional es obligatorio.',
            'grado.required' => 'El grado es obligatorio.',
            'codigo.required' => 'El codigo es obligaotorio.',
            'nombre.required' => 'El nombre de es obligatorio.',
            'grado.in' => 'El grado debe ser básico, medio o superior.',
            'codigo_familia.regex' => 'El código de la familia solo admite letras, números, guiones y guiones bajos.',
            'codigo.regex' => 'El código solo admite letras, números, guiones y guiones bajos.',
        ];
    }

    /** Cómo se llama cada campo en los mensajes que no personalizamos. */
    public function attributes(): array
    {
        return [
            'codigo_familia' => 'codigo familia profesional',
            'grado' => 'grado',
            'codigo' => 'codigo',
            'nombre' => 'nombre',
            'descripcion' => 'descripcion',
        ];
    }
}
