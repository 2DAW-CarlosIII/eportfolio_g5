<x-layout :id="$id">
    <h1>Modificar familia profesional {{ $id }}</h1>
    <p>{{ $familiaProfesional['nombre'] }}</p>
    <br>
    <br>
    <form method="POST" action="{{ route('familias-profesionales.update', $id) }}" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="codigo" class="block font-medium text-gray-700">Código</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @error('codigo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>


        <div>
            <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @error('nombre')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>


        <div>
            <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <button type="submit">Añadir familia profesional</button>
    </form>
</x-layout>
