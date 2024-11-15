<button @click="darkMode=!darkMode" type="button"
  class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer bg-zinc-200 dark:bg-zinc-700 w-11"
  role="switch" aria-checked="false">
  <span class="sr-only">Use setting</span>
  <span
    class="relative inline-block w-5 h-5 transition duration-500 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none dark:translate-x-5 ring-0">
    <span
      class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-500 ease-in opacity-100 dark:opacity-0 dark:duration-100 dark:ease-out"
      aria-hidden="true">
      <i class="fa fa-sun text-yellow-700"></i>
    </span>
    <span
      class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-100 ease-out opacity-0 dark:opacity-100 dark:duration-200 dark:ease-in"
      aria-hidden="true">
      <i class="fa fa-moon text-purple-600"></i>
    </span>
  </span>
</button>