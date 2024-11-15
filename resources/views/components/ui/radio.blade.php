<div x-data="{ selected: null }" class="flex w-full">
  <div class="flex flex-col mb-2 w-full">
    <input @isset($checker) 'checked' @endisset type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" x-model="selected" class="hidden peer" />
    <label for="{{ $id }}"
      class="flex w-full cursor-pointer justify-start gap-4 rounded-lg border border-gray-300 bg-white p-2 text-sm font-medium shadow-sm hover:border-gray-200
            dark:border-slate-700 dark:bg-slate-800 dark:text-gray-200 dark:hover:border-slate-600 peer-checked:border-blue-400 peer-checked:ring-1 peer-checked:ring-blue-400 peer-checked:dark:bg-slate-700">
      @isset($icon)
      <div
      class="flex justify-center items-center rounded-full border-2 font-bold size-6 dark:border-slate-500 dark:text-slate-500">
      {{ $icon }}
      </div>
    @endisset
      <p class="text-blue-950 dark:text-blue-400">{{ $slot }}</p>
    </label>
    @error($name)
    <div class="text-red-500 text-xs dark:text-red-400">{{ $message }}</div>
  @enderror
  </div>
</div>