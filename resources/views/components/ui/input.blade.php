<div class="mb-2 w-full">
  @if($type == 'checkbox')
    <div class="flex gap-2 items-center">
    <input {{ $attributes->merge(['class' => 'flex block shadow-sm rounded-md border-gray-300 focus:border-blue-300 focus:ring-blue-500 focus:ring-2 focus:ring-offset-2 sm:text-sm']) }}>
    <label for="{{ $id ?? $name }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">
      {{ $slot }}
    </label>
    </div>
  @else
  @isset($label)
    <label for="{{ $id ?? $name }}"
    class="block text-sm font-medium text-gray-800 dark:text-slate-400">{{ $label ?? $name }}</label>
  @endisset
    <div {{ $attributes->merge(['class' =>
    'flex items-center mt-1 block shadow-sm rounded-md border border-gray-300 
      focus:border-blue-300 focus:ring-blue-500 focus:ring-2 focus:ring-offset-2 sm:text-sm 
      bg-gray-50 border-gray-200 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-400'
    ]) 
      }}>
    @isset($icon)
    <span class="flex items-center pl-2 text-gray-300 dark:text-slate-500">
      {{ $icon }}
    </span>
    @endisset

    {{ $slot }}

    @if ($type == 'password')

    <div x-data="{show: false}" class="flex w-full">
      <input :type="show ? 'text' : 'password'" {{ $attributes->merge(['class' => 'w-full focus:outline-none p-2 bg-transparent dark:text-slate-400']) }}>
      @isset($reveal)
      <span
      class="flex items-center justify-center pr-2 cursor-pointer text-gray-300 hover:text-gray-400 dark:text-slate-500 dark:hover:text-slate-400"
      @click="show = !show">
      <i x-cloak class="fa-solid fa-eye" x-show="!show"></i>
      <i x-cloak class="fa-solid fa-eye-slash" x-show="show"></i>
      </span>
    @endisset
    </div>

  @else
  <input {{ $attributes->merge(['class' => 'w-full focus:outline-none p-2 rounded-md bg-transparent']) }}>
@endif
    </div>
  @endif

  @error($name)
    <div class="text-red-500 dark:text-red-400 text-xs">{{ $message }}</div>
  @enderror
</div>