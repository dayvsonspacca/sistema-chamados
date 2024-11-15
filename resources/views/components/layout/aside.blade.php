<aside class="flex h-screen flex-col justify-between border-e bg-gray-50 dark:border-e-slate-900 dark:bg-slate-950">
  <div>
    <div class="p-2 flex justify-center">
      <a href="#">
        <x-ui.avatar name="{{ auth()->user()->username }}" tooltip />
      </a>
    </div>

    <div class="border-t border-gray-100 dark:border-slate-900">
      <div class="px-2">
        <div class="py-2">
          <a href="{{ route('chamados.criar') }}"
            class="group relative flex justify-center rounded px-2 py-1.5 bg-green-50 text-green-700 hover:bg-green-100 dark:bg-slate-900 dark:text-green-300 dark:hover:bg-slate-800">
            <i class="fa-solid fa-plus"></i>

            <span
              class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 w-24 rounded px-2 py-1.5 text-xs font-medium text-white bg-gray-900 group-hover:visible z-20">
              Criar chamado
            </span>
          </a>
        </div>

        <ul class="pt-4 space-y-2 border-y border-gray-100 dark:border-slate-900">
          <li>
            <a href={{ route('chamados') }}
              class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-blue-950 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300">
              <i class="fa-solid fa-list text-base"></i>
              <span
                class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded px-2 py-1.5 text-xs font-medium text-white bg-gray-900 group-hover:visible z-20">
                Chamados
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 p-2 dark:border-slate-900">
    <div class="py-2 flex justify-center">
      <x-layout.theme-toggle />
    </div>
    <div class="py-2">
      <a href="{{ route('logout') }}"
        class="group relative flex justify-center rounded px-2 py-1.5 bg-red-50 text-red-700 hover:bg-red-100 dark:bg-slate-900 dark:text-red-300 dark:hover:bg-slate-800">
        <i class="fa-solid fa-right-from-bracket text-base"></i>

        <span
          class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded px-2 py-1.5 text-xs font-medium text-white bg-gray-900 group-hover:visible z-20">
          Sair
        </span>
      </a>
    </div>
  </div>
</aside>