<x-layout.app title="Chamados - Criar">
  <x-ui.title class="mb-4" icon="fa-solid fa-plus">
    Criar chamado
  </x-ui.title>

  <div class="grid grid-cols-1 gap-4">
    <x-ui.form action="{{ route('chamados.criar.store') }}" method="POST">
      <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <x-ui.input value="{{ old('titulo') }}" id="titulo" name="titulo" type="text" placeholder="Título"
            label="Título" maxlength="255" />
        </div>
        <div>
          <x-ui.select name="responsavel" label="Responsável">
            <option value=""></option>  
            @foreach ($usuarios as $usuario)
              <option value="{{ $usuario->id }}">{{ "$usuario->first_name  $usuario->last_name"}}</option>  
            @endforeach
          </x-ui.select>
        </div>
        <fieldset>
          <legend class="text-sm font-medium text-gray-700 dark:text-slate-400">Prioridade</legend>
          <div class="mt-1 flex gap-4">
            <x-ui.radio class="" name="prioridade" id="baixa" value="baixa">Baixa</x-ui.radio>
            <x-ui.radio class="" name="prioridade" id="média" checked value="média">Média</x-ui.radio>
            <x-ui.radio class="" name="prioridade" id="alta" value="alta">Alta</x-ui.radio>
          </div>
        </fieldset>
        <div class="col-span-2">
          <x-ui.input value="{{ old('prazo') }}" id="prazo" name="prazo" type="text" id="datepicker-inline" datepicker
            label="Prazo" placeholder="Selecione o prazo"/>
        </div>
        <div class="col-span-2">
          <x-ui.textarea id="descricrao" name="descricrao" label="Descrição" />
        </div>
      </div>
      <div class="flex justify-end mt-4">
        <x-ui.button type="submit" name="submit" variant="success">
          <i class="fa-solid fa-circle-plus"></i>
          Criar
        </x-ui.button>
      </div>
    </x-ui.form>
  </div>
</x-layout.app>