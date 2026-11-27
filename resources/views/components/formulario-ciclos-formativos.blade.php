@php
    $grados = [
        'basico' => 'Basico',
        'medio'  => 'Medio',
        'superior' => 'Superior',
    ];
@endphp

@props(['cicloFormativo' => null, 'action', 'boton', 'metodo' => null])

<form action="{{ $action }}" method="POST">
    @csrf
    @if ($metodo) @method($metodo) @endif

    <div>
            <label for="codigo_familia" class="block font-semibold">Codigo Familia</label>
            <input type="text" name="codigo_familia" id="codigo_familia" value="{{ old('codigo_familia', $cicloFormativo['codigo_familia'] ?? '') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('codigo_familia')])>
            @error('codigo_familia')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="grado" class="block font-semibold">Grado</label>
            <select name="grado" id="grado">
                @foreach ($grados as $clave => $valor)
                    <option value="{{ $clave }}" @selected(old('grado', $cicloFormativo['grado'] ?? '') === $clave)>{{ $valor }}</option>
                @endforeach
            </select>
            @error('grado')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="codigo" class="block font-semibold">Codigo</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $cicloFormativo['codigo'] ?? '') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('codigo')])>
            @error('codigo')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="nombre" class="block font-semibold">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $cicloFormativo['nombre'] ?? '') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('nombre')])>
            @error('nombre')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="descripcion" class="block font-semibold">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $cicloFormativo['descripcion'] ?? '') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('descripcion')])>
            @error('descripcion')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>

    <button type="submit">{{ $boton }}</button>
</form>