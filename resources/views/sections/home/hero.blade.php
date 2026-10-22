<section class="hero relative isolate overflow-hidden bg-espresso-950 text-cream-100" aria-labelledby="hero-title">
  {{-- Late-afternoon glow --}}
  <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
    <div class="absolute -top-40 right-[-10%] size-[38rem] rounded-full bg-terracotta-500/35 blur-3xl"></div>
    <div class="absolute bottom-[-12rem] left-[-8rem] size-[28rem] rounded-full bg-karamel/20 blur-3xl"></div>
  </div>

  <div class="shell grid items-center gap-14 py-20 md:py-28 lg:grid-cols-[1.15fr_0.85fr]">
    <div>
      <p class="eyebrow text-terracotta-300">{{ $hero['eyebrow'] }}</p>

      <h1 id="hero-title" class="mt-5 text-display leading-[1.02] text-cream-50">
        {{ $hero['title'] }}
      </h1>

      <p class="mt-6 max-w-xl text-lg leading-relaxed text-cream-200/85">
        {{ $hero['lead'] }}
      </p>

      <div class="mt-9 flex flex-wrap gap-3">
        <a class="btn-primary" href="{{ $hero['primary']['url'] }}">{{ $hero['primary']['label'] }}</a>
        <a class="btn-ghost" href="{{ $hero['secondary']['url'] }}">{{ $hero['secondary']['label'] }}</a>
      </div>

      <dl class="mt-14 grid max-w-lg grid-cols-3 gap-6 border-t border-cream-100/15 pt-8">
        @foreach ($hero['facts'] as $fact)
          <div class="flex flex-col-reverse">
            <dt class="mt-1 text-xs leading-snug text-cream-200/70">{{ $fact['label'] }}</dt>
            <dd class="font-display text-3xl font-semibold text-cream-50">{{ $fact['value'] }}</dd>
          </div>
        @endforeach
      </dl>
    </div>

    <div class="relative mx-auto w-full max-w-sm lg:max-w-none">
      {{-- Illustration: sun setting behind a cup --}}
      <div class="relative aspect-square rounded-full bg-linear-to-b from-karamel via-terracotta-500 to-terracotta-700 shadow-warm">
        <svg class="absolute inset-x-0 bottom-0 mx-auto w-3/4" viewBox="0 0 200 160" aria-hidden="true" focusable="false">
          <path d="M70 30c-8 8-8 16 0 24M100 20c-8 8-8 16 0 24M130 30c-8 8-8 16 0 24" class="fill-none stroke-cream-100/80" stroke-width="5" stroke-linecap="round" />
          <path d="M40 70h120v18a52 52 0 0 1-52 52h-16a52 52 0 0 1-52-52Z" class="fill-cream-50" />
          <path d="M160 78h8a18 18 0 0 1 0 36h-14" class="fill-none stroke-cream-50" stroke-width="9" stroke-linecap="round" />
          <rect x="20" y="146" width="160" height="10" rx="5" class="fill-espresso-900" />
        </svg>
      </div>

      <div class="absolute -bottom-6 left-0 rounded-card bg-cream-50 p-5 text-espresso-900 shadow-warm sm:-left-6">
        <p class="eyebrow">{{ $hero['roast']['label'] }}</p>
        <p class="mt-2 font-display text-lg font-semibold">{{ $hero['roast']['name'] }}</p>
        <p class="mt-1 text-sm text-espresso-500">{{ $hero['roast']['notes'] }}</p>
      </div>
    </div>
  </div>
</section>
