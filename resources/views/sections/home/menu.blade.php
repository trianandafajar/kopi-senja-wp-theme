<section id="menu" class="scroll-mt-24 py-20 md:py-28" aria-labelledby="menu-title">
  <div class="shell">
    <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
      <div class="max-w-2xl">
        <p class="eyebrow">{{ __('Menu Andalan', 'kopi-senja') }}</p>
        <h2 id="menu-title" class="mt-3 text-4xl md:text-5xl">{{ __('Diseduh dengan sabar, dinikmati tanpa buru-buru.', 'kopi-senja') }}</h2>
      </div>
      <p class="max-w-sm text-espresso-700">
        {{ __('Pilihan favorit dari bar kami. Menu lengkap dan pilihan musiman tersedia langsung di kedai.', 'kopi-senja') }}
      </p>
    </div>

    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ($menu as $item)
        <x-menu-card
          :name="$item['name']"
          :description="$item['description']"
          :price="$item['price']"
          :category="$item['category']"
          :icon="$item['icon']"
          :badge="$item['badge'] ?? null"
        />
      @endforeach
    </div>

    <div class="mt-20 overflow-hidden rounded-card bg-cream-200/60">
      <div class="grid gap-10 p-8 md:p-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">
        <div>
          <p class="eyebrow">{{ __('Biji Sangrai', 'kopi-senja') }}</p>
          <h3 class="mt-3 text-3xl">{{ __('Bawa pulang rasa senja.', 'kopi-senja') }}</h3>
          <p class="mt-4 text-espresso-700">
            {{ __('Biji kopi segar dari roastery kami, dikemas 200 gram. Bisa digiling sesuai alat seduh Anda.', 'kopi-senja') }}
          </p>
        </div>

        <ul class="grid gap-4 sm:grid-cols-3" role="list">
          @foreach ($beans as $bean)
            <li class="rounded-2xl bg-cream-50 p-5">
              <x-icon name="biji" class="size-7 text-terracotta-500" />
              <p class="mt-4 font-display text-lg leading-tight font-semibold">{{ $bean['origin'] }}</p>
              <p class="mt-1 text-xs font-medium tracking-wide text-espresso-500 uppercase">{{ $bean['process'] }}</p>
              <p class="mt-3 text-sm text-espresso-700">{{ $bean['notes'] }}</p>
              <p class="mt-4 font-semibold text-terracotta-600">
                <span class="sr-only">{{ __('Harga:', 'kopi-senja') }}</span>
                Rp{{ number_format($bean['price'], 0, ',', '.') }}
              </p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
