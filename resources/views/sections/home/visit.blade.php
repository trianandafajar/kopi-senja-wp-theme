<section id="kunjungi" class="scroll-mt-24 pb-20 md:pb-28" aria-labelledby="kunjungi-title">
  <div class="shell">
    <div class="overflow-hidden rounded-card bg-cream-100 shadow-warm ring-1 ring-espresso-900/5">
      <div class="grid lg:grid-cols-2">
        <div class="p-8 md:p-12">
          <p class="eyebrow">{{ __('Kunjungi Kami', 'kopi-senja') }}</p>
          <h2 id="kunjungi-title" class="mt-3 text-4xl md:text-5xl">{{ __('Mampir sebelum matahari terbenam.', 'kopi-senja') }}</h2>
          <p class="mt-4 max-w-md text-espresso-700">
            {{ __('Tersedia meja indoor, teras, dan sudut tenang untuk bekerja. Untuk rombongan lebih dari delapan orang, silakan reservasi terlebih dahulu.', 'kopi-senja') }}
          </p>

          <dl class="mt-10 grid gap-8 sm:grid-cols-2">
            <div>
              <dt class="flex items-center gap-2 font-semibold text-espresso-900">
                <x-icon name="lokasi" class="size-5 text-terracotta-500" />
                {{ __('Alamat', 'kopi-senja') }}
              </dt>
              <dd class="mt-2 text-sm leading-relaxed text-espresso-700">
                <address class="not-italic">
                  @foreach ($business['address'] as $line)
                    {{ $line }}@if (! $loop->last)<br>@endif
                  @endforeach
                </address>
              </dd>
            </div>

            <div>
              <dt class="flex items-center gap-2 font-semibold text-espresso-900">
                <x-icon name="telepon" class="size-5 text-terracotta-500" />
                {{ __('Kontak', 'kopi-senja') }}
              </dt>
              <dd class="mt-2 space-y-1 text-sm text-espresso-700">
                <a class="block" href="tel:{{ preg_replace('/[^0-9+]/', '', $business['phone']) }}">{{ $business['phone'] }}</a>
                <a class="block" href="mailto:{{ $business['email'] }}">{{ $business['email'] }}</a>
              </dd>
            </div>

            <div class="sm:col-span-2">
              <dt class="flex items-center gap-2 font-semibold text-espresso-900">
                <x-icon name="jam" class="size-5 text-terracotta-500" />
                {{ __('Jam Buka', 'kopi-senja') }}
              </dt>
              <dd class="mt-3">
                <ul class="divide-y divide-espresso-900/10 text-sm" role="list">
                  @foreach ($business['hours'] as $row)
                    <li class="flex justify-between gap-4 py-2.5">
                      <span class="text-espresso-700">{{ $row['days'] }}</span>
                      <span class="font-semibold text-espresso-900 tabular-nums">{{ $row['time'] }}</span>
                    </li>
                  @endforeach
                </ul>
              </dd>
            </div>
          </dl>

          <a class="btn-primary mt-10" href="mailto:{{ $business['email'] }}?subject={{ rawurlencode(__('Reservasi Meja', 'kopi-senja')) }}">
            {{ __('Reservasi lewat email', 'kopi-senja') }}
          </a>
        </div>

        {{-- Stylised map illustration (no third-party embed) --}}
        <div class="relative min-h-72 bg-espresso-800" aria-hidden="true">
          <svg class="absolute inset-0 size-full" viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice">
            <rect width="400" height="400" class="fill-espresso-800" />
            <g class="fill-none stroke-espresso-700" stroke-width="18" stroke-linecap="round">
              <path d="M-20 120 C 100 140, 220 60, 420 110" />
              <path d="M60 -20 C 90 120, 40 260, 110 420" />
              <path d="M-20 300 C 140 280, 260 340, 420 290" />
              <path d="M260 -20 C 240 140, 300 260, 280 420" />
            </g>
            <g class="fill-none stroke-espresso-500/50" stroke-width="2" stroke-dasharray="6 8">
              <path d="M-20 210 C 120 200, 260 230, 420 200" />
            </g>
            <circle cx="190" cy="200" r="70" class="fill-terracotta-500/15" />
            <circle cx="190" cy="200" r="36" class="fill-terracotta-500/30" />
            <path d="M190 228s-20-17.7-20-32.9a20 20 0 0 1 40 0C210 210.3 190 228 190 228Z" class="fill-terracotta-500" />
            <circle cx="190" cy="195" r="7" class="fill-cream-50" />
          </svg>
          <p class="absolute bottom-6 left-6 rounded-full bg-cream-50 px-4 py-2 text-sm font-semibold text-espresso-900 shadow-warm">
            {!! $siteName !!} · {{ $business['address'][1] ?? '' }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
