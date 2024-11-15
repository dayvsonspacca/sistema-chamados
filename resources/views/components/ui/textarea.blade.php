<label for="{{ $id }}" class="block text-sm font-medium text-gray-800 dark:text-slate-400" x-data='{ value: ""}'>
  {{ $label }}
  <div id="{{ $id }}" class="mt-1 w-full shadow-sm rounded-b-md border border-gray-300 
      focus:border-blue-300 focus:ring-blue-500 focus:ring-2 focus:ring-offset-2 sm:text-sm 
      bg-gray-50 dark:border-slate-700 dark:bg-slate-800 text-gray-800 dark:text-slate-400" x-text="value" x-model="value"></div>
  <input name="{{ $name }}" type="text" class='hidden' x-model="value">
</label>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    new window.quill('#{{ $id }}', {
      theme: 'snow'
    });

    document.getElementById('{{ $id }}').style.height = '15rem'
  });
</script>