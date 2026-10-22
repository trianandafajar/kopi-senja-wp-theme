<div class="page-header relative overflow-hidden border-b border-espresso-900/10 bg-cream-100">
  <div class="pointer-events-none absolute -top-24 right-[-6rem] size-72 rounded-full bg-terracotta-400/20 blur-3xl" aria-hidden="true"></div>

  <div class="shell relative py-16 md:py-20">
    @isset($eyebrow)
      <p class="eyebrow">{{ $eyebrow }}</p>
    @endisset

    <h1 class="mt-3 max-w-3xl text-4xl md:text-6xl">{!! $title !!}</h1>

    @if (! empty($lead))
      <p class="mt-4 max-w-2xl text-lg text-espresso-700">{{ $lead }}</p>
    @endif
  </div>
</div>
