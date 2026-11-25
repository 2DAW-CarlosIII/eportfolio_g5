<nav class="sticky top-0 z-50 px-8 py-4 bg-[#0d0e11] border-b border-gray-800">
    <div class="flex items-center text-white justify-between mx-auto w-full max-w-7xl">
      <a href="/" class="flex items-center gap-2">
        <i class="bi bi-send-fill text-xl text-[#cff245]"></i> <span>SendIt</span>
      </a>
      <nav class="hidden md:flex text-sm gap-8">
        <a href="{{ route('evidencias.index') }}" class="hover:underline">Evidencias</a>
        <a href="{{ route('familias-profesionales.index') }}" class="hover:underline">Familias Profesionales</a>
        <a href="{{ route('ciclos-formativos.index') }}" class="hover:underline">Ciclos Formativos</a>
        <a href="{{ route('modulos-formativos.index') }}" class="hover:underline">Modulos Formativos</a>
      </nav>
      <a href="" class="text-sm py-1 px-4 border rounded-xl">
        Contact
      </a>
    </div>
</nav>
