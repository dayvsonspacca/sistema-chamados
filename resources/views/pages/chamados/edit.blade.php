<x-layout.app title="Chamados - Editar">
  <x-ui.title icon="fa-solid fa-list">
    Editando <span class="text-gray-400">({{ $chamado->titulo }})</span>
  </x-ui.title>

  <div class="grid grid-cols-1 gap-4">
    <x-ui.form action="{{ route('chamados.editar.store', ['id' => $chamado->id]) }}" method="POST">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <x-ui.input value="{{ $chamado->titulo }}" id="titulo" name="titulo" type="text" placeholder="Título"
            label="Título" maxlength="255" />
        </div>
        <div class="col-span-2 md:col-span-1">
          <x-ui.select name="responsavel_id" label="Responsável">
            <option value=""></option>
            @foreach ($usuarios as $usuario)
              <option @if ($usuario->id == $chamado->responsavel_id) selected @endif value="{{ $usuario->id }}">{{ "$usuario->first_name  $usuario->last_name"}}</option>
            @endforeach
          </x-ui.select>
        </div>
        <div class="col-span-2 md:col-span-1">
          <x-ui.select name="prioridade" label="Prioridade">
            <option @if ($chamado->prioridade == 'baixa') selected @endif value="baixa">Baixa</option>
            <option @if ($chamado->prioridade == 'média') selected @endif value="média">Média</option>
            <option @if ($chamado->prioridade == 'alta') selected @endif value="alta">Alta</option>
          </x-ui.select>
        </div>
        <div class="col-span-2">
          <x-ui.input value="{{ $chamado->dt_prazo }}" id="dt_prazo" name="dt_prazo" type="text" id="datepicker-inline"
            datepicker label="Prazo" placeholder="Selecione o prazo" />
        </div>
        <div class="col-span-2">
          <h5 class="text-lg">Descrição</h5>
          <textarea class="w-full shadow-sm rounded-md border border-gray-300 bg-gray-50 dark:border-slate-700 dark:bg-slate-800 text-gray-800 dark:text-slate-400" name="descricao" id="descricao">{{ $chamado->descricao}}</textarea>
        </div>
        <script>
          $('#descricao').summernote({
              tabsize: 2,
              height: 120,
              toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
        </script>
      </div>
      <div class="flex justify-end mt-4">
        <x-ui.button variant="primary" type="link" href="{{ route('chamados') }}">
          <i class="fa-solid fa-chevron-left"></i>
          Voltar
        </x-ui.button>
        <x-ui.button type="submit" name="submit" variant="success">
          <i class="fa-solid fa-check"></i>
          Salvar
        </x-ui.button>
      </div>
    </x-ui.form>
  </div>
</x-layout.app>