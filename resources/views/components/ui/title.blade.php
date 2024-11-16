<div class="flex w-full justify-between">

  <h1 class="flex flex-col mb-10 gap-2">

    <div class="flex items-center">
      @isset($icon)
      <span
      class="flex text-lg md:text-2xl justify-center items-center mr-2 p-2 rounded-lg size-12 bg-gray-200 text-gray-400 dark:bg-slate-800 dark:text-slate-400">
      <i class="{{ $icon }}"></i>
      </span>
    @endisset

      <p class="text-xl md:text-4xl font-medium text-gray-900 dark:text-slate-300">
        {{ $slot }}
      </p>
    </div>
    @isset($description)
    <span class="text-sm text-gray-600 dark:text-slate-400 font-medium">
      {{ $description }}
    </span>
  @endisset
  </h1>

  @isset($end)
    <div class="flex items-center justify-center">
    {{ $end }}
    </div>
  @endisset
</div>