@props([
  'name' => 'cangkir',
])

<svg {{ $attributes->merge(['class' => 'size-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
  @switch($name)
    @case('gelas')
      <path d="M6 4h12l-1.5 15a2 2 0 0 1-2 1.8h-5a2 2 0 0 1-2-1.8Z" />
      <path d="M6.6 10h10.8M11 4l1-2.5" />
      @break
    @case('daun')
      <path d="M5 19c0-8 5-13 14-14-1 9-6 14-14 14Z" />
      <path d="M5 19 13 11" />
      @break
    @case('kue')
      <path d="M4 15c0-4 3.6-7 8-7s8 3 8 7Z" />
      <path d="M3 15h18v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2ZM9 11l1 1M14 10.5l1 1" />
      @break
    @case('biji')
      <ellipse cx="12" cy="12" rx="6" ry="8.5" transform="rotate(30 12 12)" />
      <path d="M9.5 5.5c3 3 0 9 4.5 13" />
      @break
    @case('jam')
      <circle cx="12" cy="12" r="8.5" />
      <path d="M12 7.5V12l3 2" />
      @break
    @case('lokasi')
      <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
      <circle cx="12" cy="9.5" r="2.5" />
      @break
    @case('telepon')
      <path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z" />
      @break
    @case('surat')
      <rect x="3" y="5" width="18" height="14" rx="2" />
      <path d="m4 7 8 6 8-6" />
      @break
    @default
      <path d="M4 9h13v4a6 6 0 0 1-6 6h-1a6 6 0 0 1-6-6Z" />
      <path d="M17 10h1.5a2.5 2.5 0 0 1 0 5H16.5M8 3.5c-.8.8-.8 1.7 0 2.5M12 3.5c-.8.8-.8 1.7 0 2.5" />
  @endswitch
</svg>
