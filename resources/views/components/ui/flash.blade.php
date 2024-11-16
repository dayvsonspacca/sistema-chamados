@php
  $variant = [
    'primary' => 'text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500',
    'success' => 'text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500',
    'danger' => 'text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500',
    'warning' => 'text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500',
    'info' => 'text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500',
    'default' => 'text-gray-600 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500',
  ];
@endphp

<div id="flash-container" class="fixed top-0 right-0 m-4 space-y-2">
  @foreach ($variant as $type => $class)
    @if (session()->has($type))
    <div
    class="flex gap-2 items-center rounded-lg px-4 py-2 text-sm font-medium {{$class}}">
    <i class="fa-solid fa-circle-info"></i>
    {{ session()->get($type) }}
    </div>
  @endif
  @endforeach
</div>