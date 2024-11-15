<x-layout.guest-app title="Acessar conta - Chamados">
  <div class="w-full max-w-lg">
    <x-ui.form action="{{ route('login') }}" class="w-full" method="POST">

      <x-ui.input id="email" name="email" type="email" placeholder="example@example.com" label="Email"
        value="{{ old('email') }}">
        <x-slot name="icon">
          <i class="fa-solid fa-at"></i>
        </x-slot>
      </x-ui.input>

      <x-ui.input id="password" name="password" type="password" placeholder="xxxxxxxxxx" label="Senha" :reveal="true"
        value="{{ old('password') }}">
        <x-slot name="icon">
          <i class="fa-solid fa-lock"></i>
        </x-slot>
      </x-ui.input>

      <div class="flex justify-beetween items-center">
        <div class="flex gap-2 items-center w-full justify-end">
          <a href="{{ route('register') }}" class="text-xs">Criar um conta</a>
          <x-ui.button type="submit" name="submit" variant="primary">Acessar</x-ui.button>
        </div>
      </div>
    </x-ui.form>
  </div>
</x-layout.guest-app>