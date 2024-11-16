<x-layout.app title="Chamados">
  <x-ui.title icon="fa-solid fa-list">
    Chamados
  </x-ui.title>

  <div class="mb-8 grid grid-cols-6 gap-8">
    <div
      class="p-5 col-span-6 md:col-span-2 rounded-md border shadow-sm dark:border-slate-900 text-gray-500 hover:bg-gray-100 hover:text-blue-950 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300 flex items-center justify-between">
      <span class="text-2xl font-semibold">Abertos</span>
      <span
        class="text-2xl font-semibold border rounded-full size-10 flex items-center justify-center border-yellow-500">{{ $abertos }}</span>
    </div>
    <div
      class="p-5 col-span-6 md:col-span-2 rounded-md border shadow-sm dark:border-slate-900 text-gray-500 hover:bg-gray-100 hover:text-blue-950 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300 flex items-center justify-between">
      <span class="text-2xl font-semibold">Em andamento</span>
      <span
        class="text-2xl font-semibold border rounded-full size-10 flex items-center justify-center border-blue-500">{{ $em_andamento }}</span>
    </div>
    <div
      class="p-5 col-span-6 md:col-span-2 rounded-md border shadow-sm dark:border-slate-900 text-gray-500 hover:bg-gray-100 hover:text-blue-950 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-300 flex items-center justify-between">
      <span class="text-2xl font-semibold">Finalidas no mês</span>
      <span
        class="text-2xl font-semibold border rounded-full size-10 flex items-center justify-center border-emerald-500">{{ $fechados }}</span>
    </div>
  </div>

  <div class="rounded-md border shadow-sm dark:border-slate-900 text-gray-500 dark:text-slate-400">
    <div class="overflow-x-auto rounded-t-lg h-[600px]">
      <table class="min-w-full divide-y-2">
        <thead class="text-left">
          <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Código</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Título</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Responsável</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Situação</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Proridade</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Prazo</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Data de criação</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium">Ações</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
          @foreach ($chamados as $chamado)
        <tr>
        <td class="whitespace-nowrap px-4 py-1">{{ $chamado->id }}</td>
        <td class="whitespace-nowrap px-4 py-1">{{ $chamado->titulo }}</td>
        <td class="whitespace-nowrap px-4 py-1">
          @if ($chamado->responsavel_id)
            <x-ui.avatar name="{{ $chamado->responsavel->username }}" />
          @endif
        </td>
        <td class="whitespace-nowrap px-4 py-1">{{ ucfirst($chamado->status) }}</td>
        <td class="whitespace-nowrap px-4 py-1">{{ ucfirst($chamado->prioridade) }}</td>
        <td class="whitespace-nowrap px-4 py-1">{{ $chamado->dt_prazo }}</td>
        <td class="whitespace-nowrap px-4 py-1">{{ $chamado->created_at->format('d/m/Y H:i:s') }}</td>
        <td class="whitespace-nowrap px-4 py-1">
          <x-ui.button name="submit" variant="primary" type="link"
          href="{{ route('chamados.atender', ['id' => $chamado->id]) }}">
          Atender <i class="fa fa-edit"></i>
          </x-ui.button>
        </td>
        </tr>
      @endforeach
        </tbody>
      </table>
    </div>

    <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
      {{ $chamados->links() }}
    </div>
  </div>
</x-layout.app>