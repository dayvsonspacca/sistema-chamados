<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/x-icon" href="/favicon.ico">

  <!-- Styles -->
  @vite(['resources/css/app.css'])

  <!-- Scripts -->
  @vite(['resources/js/bootstrap.js', 'resources/js/flowbite.js'])
  
  <!-- Summernote -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

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
    <x-ui.flash />
  </div>
</body>

</html>