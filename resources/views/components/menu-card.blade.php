@props([
  'name',
  'description' => null,
  'price' => null,
  'category' => null,
  'icon' => 'cangkir',
  'badge' => null,
])

<article {{ $attributes->merge(['class' => 'menu-card group relative flex flex-col rounded-card border border-espresso-900/10 bg-white/70 p-6 transition hover:-translate-y-1 hover:border-terracotta-400/60 hover:shadow-warm']) }}>
  <div class="flex items-start justify-between gap-4">
    <span class="inline-flex size-12 items-center justify-center rounded-full bg-cream-200 text-espresso-800 transition group-hover:bg-terracotta-500 group-hover:text-cream-50">
      <x-icon :name="$icon" />
    </span>

    @if ($badge)
      <span class="rounded-full bg-karamel/20 px-3 py-1 text-xs font-semibold text-espresso-800">{{ $badge }}</span>
    @endif
  </div>

  @if ($category)
    <p class="eyebrow mt-6 text-espresso-500">{{ $category }}</p>
  @endif

  <h3 class="mt-2 text-xl">{{ $name }}</h3>

  @if ($description)
    <p class="mt-2 flex-1 text-sm leading-relaxed text-espresso-700">{{ $description }}</p>
  @endif

  @if ($price)
    <p class="mt-5 font-display text-lg font-semibold text-terracotta-600">
      <span class="sr-only">{{ __('Harga:', 'kopi-senja') }}</span>
      Rp{{ number_format($price, 0, ',', '.') }}
    </p>
  @endif
</article>
