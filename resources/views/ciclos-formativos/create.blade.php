<x-layout titulo="Nuevo ciclo formativo">
    <h1>Nuevo ciclo formativo</h1>
    <form method="POST" action="{{ route('ciclos-formativos.store') }}">
        @csrf
        <div>
            <label for="codigo_familia" class="block font-semibold">Codigo Familia</label>
            <input type="text" name="codigo_familia" id="codigo_familia" value="{{ old('codigo_familia') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('codigo_familia')])>
            @error('codigo_familia')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror

            <label for="grado" class="block font-semibold">Grado</label>
            <input type="text" name="grado" id="grado" value="{{ old('grado') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('grado')])>
            @error('grado')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror

            <label for="codigo" class="block font-semibold">Codigo</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('codigo')])>
            @error('codigo')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror

            <label for="nombre" class="block font-semibold">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('nombre')])>
            @error('nombre')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror

            <label for="descripcion" class="block font-semibold">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('descripcion')])>
            @error('descripcion')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="mt-4 rounded bg-slate-800 px-3 py-1.5 text-white">Añadir ciclo formativo</button>
    </form>
</x-layout>
