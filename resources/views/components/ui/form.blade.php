@isset($action)
  <form {{ $attributes }}>
    @csrf
    {{ $slot }}
  </form>
@endisset