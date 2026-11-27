<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ModuloFormativoRequest extends FormRequest
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
            'codigo_ciclo' => 'required|string|max:50|regex:/[A-Z0-9_-]+$/',
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|regex:/[A-Z0-9_-]+$/',
            'horas_totales' => 'required|integer|min:1|max:2000',
            'curso_escolar' => 'required|in:PRIMERO,SEGUNDO',
            'centro' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ];
    }
    public function messages(): array
    {
        return [
            'codigo_ciclo.required' => 'El código del ciclo es obligatorio.',
            'codigo_ciclo.string' => 'El código del ciclo debe ser una cadena de texto.',
            'codigo_ciclo.max' => 'El código del ciclo no puede tener más de 50 caracteres.',
            'codigo_ciclo.regex' => 'El código del ciclo solo puede contener letras mayúsculas, números, guiones y guiones bajos.',

            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',

            'codigo.required' => 'El código es obligatorio.',
            'codigo.string' => 'El código debe ser una cadena de texto.',
            'codigo.max' => 'El código no puede tener más de 50 caracteres.',
            'codigo.regex' => 'El código solo puede contener letras mayúsculas, números, guiones y guiones bajos.',

            'horas_totales.required' => 'Las horas totales son obligatorias.',
            'horas_totales.integer' => 'Las horas totales deben ser un número entero.',
            'horas_totales.min' => 'Las horas totales deben ser al menos 1.',
            'horas_totales.max' => 'Las horas totales no pueden superar las 2000.',

            'curso_escolar.required' => 'El curso escolar es obligatorio.',
            'curso_escolar.in' => 'El curso escolar debe ser PRIMERO o SEGUNDO.',

            'centro.required' => 'El centro es obligatorio.',
            'centro.string' => 'El centro debe ser una cadena de texto.',
            'centro.max' => 'El centro no puede tener más de 255 caracteres.',

            // No se requiere mensaje personalizado para la descripción ya que es opcional.
        ];
    }
}
