<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/x-icon" href="/favicon.ico">

  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/css/quill.snow.css'])

  <!-- Scripts -->
  @vite(['resources/js/bootstrap.js', 'resources/js/flowbite.js'])
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>{{ $title ?? 'Chamados' }}</title>
</head>

<body x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }"  class="antialiased">

  <main class="flex">
    <x-layout.aside />
    <div class="h-screen overflow-y-scroll w-full bg-gray-100 dark:bg-slate-950 p-4">
      {{ $slot }}
    </div>
  </main>

  <div class="flex gap-2">
    <div id="toasts-container" class="absolute bottom-0 right-0 m-4 space-y-2"></div>
    <x-ui.flash />
  </div>
</body>

</html>