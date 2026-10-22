<footer class="content-info mt-auto bg-espresso-950 text-cream-200">
  <div class="shell grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr]">
    <div>
      <a class="text-cream-50 no-underline hover:text-cream-50" href="{{ home_url('/') }}" rel="home">
        <x-logo :name="$siteName" :tagline="__('Kopi & Roastery', 'kopi-senja')" />
      </a>
      <p class="mt-5 max-w-xs text-sm leading-relaxed text-cream-200/70">
        {{ __('Kedai kopi spesialti dan roastery kecil. Disangrai sendiri, diseduh dengan sabar, untuk menemani senja Anda.', 'kopi-senja') }}
      </p>
    </div>

    <div>
      <h2 class="text-sm font-semibold tracking-[0.2em] text-cream-50 uppercase font-sans">{{ __('Jam Buka', 'kopi-senja') }}</h2>
      <ul class="mt-4 space-y-2 text-sm" role="list">
        @foreach ($business['hours'] as $row)
          <li>
            <span class="block text-cream-200/60">{{ $row['days'] }}</span>
            <span class="tabular-nums">{{ $row['time'] }}</span>
          </li>
        @endforeach
      </ul>
    </div>

    <div>
      <h2 class="text-sm font-semibold tracking-[0.2em] text-cream-50 uppercase font-sans">{{ __('Alamat', 'kopi-senja') }}</h2>
      <address class="mt-4 text-sm leading-relaxed not-italic">
        @foreach ($business['address'] as $line)
          {{ $line }}<br>
        @endforeach
        <a class="mt-3 inline-block text-terracotta-300 hover:text-terracotta-400" href="tel:{{ preg_replace('/[^0-9+]/', '', $business['phone']) }}">{{ $business['phone'] }}</a><br>
        <a class="text-terracotta-300 hover:text-terracotta-400" href="mailto:{{ $business['email'] }}">{{ $business['email'] }}</a>
      </address>
    </div>

    <div>
      <h2 class="text-sm font-semibold tracking-[0.2em] text-cream-50 uppercase font-sans">{{ __('Jelajahi', 'kopi-senja') }}</h2>
      <nav class="nav-footer mt-4" aria-label="{{ __('Navigasi footer', 'kopi-senja') }}">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'container' => false, 'depth' => 1, 'echo' => false]) !!}
        @else
          <ul class="nav">
            <li><a href="{{ home_url('/#menu') }}">{{ __('Menu', 'kopi-senja') }}</a></li>
            <li><a href="{{ home_url('/#tentang') }}">{{ __('Tentang Kami', 'kopi-senja') }}</a></li>
            <li><a href="{{ home_url('/#kunjungi') }}">{{ __('Kunjungi', 'kopi-senja') }}</a></li>
          </ul>
        @endif
      </nav>
    </div>
  </div>

  @if (is_active_sidebar('sidebar-footer'))
    <div class="footer-widgets border-t border-cream-100/10">
      <div class="shell grid gap-8 py-10 text-sm md:grid-cols-3">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
    </div>
  @endif

  <div class="border-t border-cream-100/10">
    <div class="shell flex flex-col gap-2 py-6 text-xs text-cream-200/60 md:flex-row md:items-center md:justify-between">
      <p>&copy; {{ wp_date('Y') }} {!! $siteName !!}. {{ __('Seluruh hak dilindungi.', 'kopi-senja') }}</p>
      <p>
        {{ __('Tema Kopi Senja, dibangun di atas', 'kopi-senja') }}
        <a class="text-cream-200/80 underline hover:text-terracotta-300" href="https://roots.io/sage/">Sage</a>
        {{ __('oleh Roots.', 'kopi-senja') }}
      </p>
    </div>
  </div>
</footer>
