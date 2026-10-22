@props([
  'name' => get_bloginfo('name', 'display'),
  'tagline' => null,
])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-3']) }}>
  {{-- Logo mark: a coffee cup under a setting sun ("senja") --}}
  <svg class="size-10 shrink-0" viewBox="0 0 48 48" aria-hidden="true" focusable="false">
    <circle cx="24" cy="24" r="23" class="fill-espresso-900" />
    <path d="M12 24a12 12 0 0 1 24 0Z" class="fill-terracotta-500" />
    <path d="M14 27h20v3a8 8 0 0 1-8 8h-4a8 8 0 0 1-8-8Z" class="fill-cream-100" />
    <path d="M34 29h1.5a3 3 0 0 1 0 6H33" class="fill-none stroke-cream-100" stroke-width="2" stroke-linecap="round" />
    <path d="M20 12c-1.5 1.5-1.5 3 0 4.5M25 10c-1.5 1.5-1.5 3 0 4.5" class="fill-none stroke-karamel" stroke-width="1.75" stroke-linecap="round" />
  </svg>

  <span class="flex flex-col leading-none">
    <span class="font-display text-xl font-semibold tracking-tight">{!! $name !!}</span>
    @if ($tagline)
      <span class="mt-1 text-[0.7rem] font-medium tracking-[0.18em] uppercase opacity-70">{{ $tagline }}</span>
    @endif
  </span>
</span>
