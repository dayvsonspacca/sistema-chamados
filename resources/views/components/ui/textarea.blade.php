<label for="{{ $id }}" class="block text-sm font-medium text-gray-800 dark:text-slate-400">
  {{ $label }}
  <textarea id="{{ $id }}" name="{{ $name }}" class="mt-1 w-full shadow-sm rounded-md border border-gray-300 
      focus:border-blue-300 focus:ring-blue-500 focus:ring-2 focus:ring-offset-2 sm:text-sm 
      bg-gray-50 dark:border-slate-700 dark:bg-slate-800 text-gray-800 dark:text-slate-400"></textarea>
</label>
<script>
  $('#{{ $id }}').summernote({
    tabsize: 2,
    height: 120,
    toolbar: [
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['paragraph']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen']]
    ]
  });
</script>