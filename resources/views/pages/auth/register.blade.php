<x-layout.guest-app title="Criar conta - Chamados">
  <div class="w-full max-w-lg">
    <x-ui.form action="/register" class="w-full" method="POST">

      <x-ui.input name="username" type="text" placeholder="jhon.doe" label="Nome de usuário" value="{{ old('username') }}">
        <x-slot name="icon">
          <i class="fa-solid fa-hashtag"></i>
        </x-slot>
      </x-ui.input>

      <div class="flex gap-2">
        <x-ui.input name="first_name" type="text" placeholder="Jhon" label="Primeiro nome" value="{{ old('first-name') }}">
          <x-slot name="icon">
            <i class="fa-solid fa-user"></i>
          </x-slot>
        </x-ui.input>

        <x-ui.input name="last_name" type="text" placeholder="Doe" label="Segundo nome" value="{{ old('last-name') }}">
          <x-slot name="icon">
            <i class="fa-solid fa-user"></i>
          </x-slot>
        </x-ui.input>
      </div>

      <x-ui.input id="email" name="email" type="email" placeholder="example@example.com" label="E-mail"
        value="{{ old('email') }}">
        <x-slot name="icon">
          <i class="fa-solid fa-at"></i>
        </x-slot>
      </x-ui.input>

      <x-ui.input name="password" type="password" placeholder="xxxxxxxxxx" label="Senha" :reveal="true">
        <x-slot name="icon">
          <i class="fa-solid fa-lock"></i>
        </x-slot>
      </x-ui.input>

      <x-ui.input name="password_confirmation" type="password" placeholder="xxxxxxxxxx" label="Confirme sua senha" :reveal="true">
        <x-slot name="icon">
          <i class="fa-solid fa-lock"></i>
        </x-slot>
      </x-ui.input>

      <div class="w-full flex justify-end items-center gap-2 dark:text-slate-400">
        <a href="{{ route('login') }}" class="text-xs">Já tem uma conta?</a>
        <x-ui.button type="submit" name="submit">Registre-se</x-ui.button>
      </div>
    </x-ui.form>
  </div>
</x-layout.guest-app>