@props(['name'])
@php
  $words = explode(' ', $name);
  $initials = '';

  if (count($words) == 1)
  {
    $initials = strtoupper(substr($words[0], 0, 2));
  }
  else
  {
    $initials = strtoupper($words[0][0]) . strtoupper($words[1][0]);
  }

@endphp

<div {{ $attributes->merge(['class' => 'size-10  inline-flex items-center justify-center group relative rounded-full border border-gray-300 overflow-hidden dark:border-slate-700']) }}>
  <span class="grid place-content-center rounded-lg size-10 text-gray-700 dark:text-slate-400">
    {{ $initials }}
  </span>
</div>