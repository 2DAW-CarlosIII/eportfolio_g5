@props([
    'moduloFormativo' => [],
    'defaultCentro' => '',
    'boton' => 'Guardar cambios',
])

<div class="space-y-4">
    <div class="border-b border-gray-300 pb-4">
        <label for="codigo_ciclo" class="block font-medium">Código del ciclo:</label>
        <input
            type="text"
            id="codigo_ciclo"
            name="codigo_ciclo"
            value="{{ old('codigo_ciclo', data_get($moduloFormativo, 'codigo_ciclo', '')) }}"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('codigo_ciclo'), 'border-gray-300' => ! $errors->has('codigo_ciclo')])
        >
        @error('codigo_ciclo')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="nombre" class="block font-medium">Nombre:</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            value="{{ old('nombre', data_get($moduloFormativo, 'nombre', '')) }}"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('nombre'), 'border-gray-300' => ! $errors->has('nombre')])
        >
        @error('nombre')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="codigo" class="block font-medium">Código:</label>
        <input
            type="text"
            id="codigo"
            name="codigo"
            value="{{ old('codigo', data_get($moduloFormativo, 'codigo', '')) }}"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('codigo'), 'border-gray-300' => ! $errors->has('codigo')])
        >
        @error('codigo')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="horas_totales" class="block font-medium">Horas totales:</label>
        <input
            type="number"
            id="horas_totales"
            name="horas_totales"
            value="{{ old('horas_totales', data_get($moduloFormativo, 'horas_totales', '')) }}"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('horas_totales'), 'border-gray-300' => ! $errors->has('horas_totales')])
        >
        @error('horas_totales')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="curso_escolar" class="block font-medium">Curso escolar:</label>
        @php($cursoActual = old('curso_escolar', data_get($moduloFormativo, 'curso_escolar', '')))
        <select
            id="curso_escolar"
            name="curso_escolar"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('curso_escolar'), 'border-gray-300' => ! $errors->has('curso_escolar')])
        >
            <option value="">Seleccionar...</option>
            <option value="PRIMERO" @selected($cursoActual === 'PRIMERO')>Primero</option>
            <option value="SEGUNDO" @selected($cursoActual === 'SEGUNDO')>Segundo</option>
        </select>
        @error('curso_escolar')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="centro" class="block font-medium">Centro:</label>
        <input
            type="text"
            id="centro"
            name="centro"
            value="{{ old('centro', data_get($moduloFormativo, 'centro', $defaultCentro)) }}"
            required
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('centro'), 'border-gray-300' => ! $errors->has('centro')])
        >
        @error('centro')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="border-b border-gray-300 pb-4">
        <label for="descripcion" class="block font-medium">Descripción:</label>
        <textarea
            id="descripcion"
            name="descripcion"
            rows="4"
            @class(['mt-1 block w-full rounded border p-2', 'border-red-500' => $errors->has('descripcion'), 'border-gray-300' => ! $errors->has('descripcion')])
        >{{ old('descripcion', data_get($moduloFormativo, 'descripcion', '')) }}</textarea>
        @error('descripcion')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-3 pt-2">
        <button
            type="submit"
            class="rounded bg-blue-600 px-4 py-2 font-medium text-white hover:bg-blue-700"
        >
            {{ $boton }}
        </button>

        <x-sendit.boton :href="route('modulos-formativos.index')">
            Volver al listado
        </x-sendit.boton>
    </div>
</div>