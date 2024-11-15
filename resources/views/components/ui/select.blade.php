<div class="mb-2">
  <label for="{{ $id ?? $name }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">
    {{ $label ?? $name }}
  </label>
  <select {{ $attributes->merge([
  'class' => 'mt-1 p-2 block w-full shadow-sm rounded-md border border-gray-300 bg-white
            dark:bg-slate-800 dark:border-slate-600 dark:text-gray-200 dark:focus:border-blue-400',
]) }}>
    {{ $slot }}
  </select>
  @error($name)
    <div class="text-red-500 text-xs dark:text-red-400">{{ $message }}</div>
  @enderror
</div>