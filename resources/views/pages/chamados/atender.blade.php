<x-layout.app title="Chamados - Atender">
  <x-ui.title icon="fa-solid fa-list">
    Atender <span class="text-gray-400">({{ $chamado->id }})</span>
  </x-ui.title>

  <div class="rounded-md border shadow-sm dark:border-slate-900 text-gray-500 dark:text-slate-400">
    <div class="overflow-x-auto rounded-t-lg">
      <table class="min-w-full">
        <thead class="text-left">
          <tr>
            <th class="whitespace-nowrap px-4 py-1 font-medium">Código</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ $chamado->id }}</th>
          </tr>
          <tr class="bg-gray-200 dark:bg-slate-900">
            <th class="whitespace-nowrap px-4 py-1 font-medium">Título</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ $chamado->titulo }}</th>
          </tr>
          <tr>
            <th class="whitespace-nowrap px-4 py-1 font-medium">Responsável</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">
              @if ($chamado->responsavel_id)
                <x-ui.avatar name="{{ $chamado->responsavel->username }}" />
              @endif
            </th>
          </tr>
          <tr class="bg-gray-200 dark:bg-slate-900">
            <th class="whitespace-nowrap px-4 py-1 font-medium">Situação</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ ucfirst($chamado->status) }}</th>
          </tr>
          <tr>
            <th class="whitespace-nowrap px-4 py-1 font-medium">Proridade</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ ucfirst($chamado->prioridade) }}</th>
          </tr>
          <tr class="bg-gray-200 dark:bg-slate-900">
            <th class="whitespace-nowrap px-4 py-1 font-medium">Prazo</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ $chamado->dt_prazo }}</th>
          </tr>
          <tr>
            <th class="whitespace-nowrap px-4 py-1 font-medium">Data de criação</th>
            <th class="whitespace-nowrap px-4 py-1 font-semibold">{{ $chamado->created_at->format('d/m/Y H:i:s') }}</th>
          </tr>
        </thead>
      </table>
    </div>

    <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
      <h5 class="text-lg">Descrição</h5>
      <textarea class="w-full shadow-sm rounded-md border border-gray-300 bg-gray-50 dark:border-slate-700 dark:bg-slate-800 text-gray-800 dark:text-slate-400" disabled readonly id="descricao">{{ $chamado->descricao}}</textarea>
    </div>
    <script>
      $('#descricao').summernote({
        tabsize: 2,
        height: 120,
        toolbar: []
      });
      $('#descricao').summernote('disable');
    </script>
  </div>

  <div class="p-5 mt-8 rounded-md border shadow-sm dark:border-slate-900 text-gray-500 dark:text-slate-400">
    <x-ui.form action="{{ route('chamados.atender.store', ['id' => $chamado->id]) }}" method="POST">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2 ">
          <x-ui.select name="responsavel_id" label="Responsável">
            <option value=""></option>
            @foreach ($usuarios as $usuario)
              <option @if ($usuario->id === $chamado->responsavel_id) selected @endif value="{{ $usuario->id }}">{{ "$usuario->first_name  $usuario->last_name"}}</option>
            @endforeach
          </x-ui.select>
          <x-ui.select name="prioridade" label="Prioridade">
            @foreach (['baixa', 'média', 'alta'] as $prioridade)
              <option @if ($prioridade === $chamado->prioridade) selected @endif value="{{ $prioridade }}">{{ ucfirst($prioridade) }}</option>
            @endforeach
          </x-ui.select>
          <x-ui.input value="{{ $chamado->dt_prazo }}" id="dt_prazo" name="dt_prazo" type="text" id="datepicker-inline" datepicker
            label="Prazo" placeholder="Selecione o prazo" />
          <x-ui.select name="acao" label="Ação">
            <option value="finalizar"> Finalizar </option>
            <option value="iniciar"> Iniciar </option>
          </x-ui.select>
        </div>
        <div class="flex justify-end gap-4 mt-4 col-span-2">
          <x-ui.button variant="primary" type="link" href="{{ route('chamados') }}">
              <i class="fa-solid fa-chevron-left"></i>
              Voltar
          </x-ui.button>
          <x-ui.button type="submit" name="submit" variant="success">
            <i class="fa-solid fa-circle-plus"></i>
            Salvar
          </x-ui.button>
        </div>
      </div>
    </x-ui.form>
  </div>
</x-layout.app>