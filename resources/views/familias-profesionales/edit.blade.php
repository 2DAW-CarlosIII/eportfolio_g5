<x-layout :id="$id">
    <h1>Modificar familia profesional {{ $id }}</h1>
    <p>{{ $familiaProfesional['nombre'] }}</p>
    <br>
    <br>
    <form method="POST" action="{{ route('familias-profesionales.update', $id) }}" class="space-y-4" novalidate>
        @csrf
        @method('PUT')
        <div>
            <label for="codigo" class="block font-medium text-gray-700">Código</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $familiaProfesional['codigo'] ?? '') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @error('codigo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>


        <div>
            <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $familiaProfesional['nombre']) }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @error('nombre')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>


        <div>
            <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >{{ old('descripcion', $familiaProfesional['descripcion']) }}</textarea>
            @error('descripcion')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <br>

        <button type="submit" @class([
            'bg-[#cff245] inline-flex items-center justify-center gap-2 rounded-[5px] font-bold text-black transition-colors',
            'px-6 py-2.5' => ! false,
            'min-w-[12em] px-9 py-4 text-2xl' => false,
            'bg-dope-red hover:bg-dope-red-hover' => ! false,
            'bg-dope-dark hover:bg-dope-dark-hover' => false,
        ])
        >Modificar familia profesional</button>
    </form>
</x-layout>
