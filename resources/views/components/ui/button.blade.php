@php
  $variant = isset($variant) ? $variant : '';

  switch ($variant)
  {
    case 'primary':
    $variant = 'text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500';
    break;
    case 'success':
    $variant = 'text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500';
    break;
    case 'danger':
    $variant = 'text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500';
    break;
    case 'warning':
    $variant = 'text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500';
    break;
    case 'info':
    $variant = 'text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500';
    break;
    default:
    $variant = 'text-gray-600 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500';
    break;
  }
@endphp

@isset($type)
  @if ($type == 'link' && isset($href))
    <a href="{{ $href }}" {{ $attributes->merge([
      'class' => 'select-none flex items-center gap-2 px-4 py-2 text-sm font-medium rounded-md border border-transparent shadow-sm ' . $variant
    ]) }}>
    {{ $slot }}
    </a>
  @elseif ($type == 'button' || $type == 'submit')
    <button {{ $attributes->merge([
      'class' => 'select-none flex items-center gap-2 px-4 py-2 text-sm font-medium rounded-md border border-transparent shadow-sm ' . $variant,
    ]) }} {{ isset($disabled) ? 'disabled' : '' }}>
    {{ $slot }}
    </button>
  @endif
@endisset