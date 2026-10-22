<header class="banner sticky top-0 z-40 border-b border-espresso-900/10 bg-cream-50/90 backdrop-blur supports-[backdrop-filter]:bg-cream-50/75">
  <div class="shell flex items-center justify-between gap-6 py-4">
    <a class="brand text-espresso-950 no-underline hover:text-espresso-950" href="{{ home_url('/') }}" rel="home">
      <x-logo :name="$siteName" :tagline="__('Kopi & Roastery', 'kopi-senja')" />
    </a>

    <button
      type="button"
      class="nav-toggle inline-flex size-11 items-center justify-center rounded-full border border-espresso-900/15 text-espresso-900 md:hidden"
      aria-controls="site-navigation"
      aria-expanded="false"
      data-nav-toggle
    >
      <span class="sr-only">{{ __('Buka menu', 'kopi-senja') }}</span>
      <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
        <path d="M4 7h16M4 12h16M4 17h10" />
      </svg>
    </button>

    <div
      id="site-navigation"
      class="nav-panel absolute inset-x-0 top-full hidden border-b border-espresso-900/10 bg-cream-50 md:static md:flex md:items-center md:gap-8 md:border-0 md:bg-transparent max-md:data-[open]:block"
      data-nav-panel
    >
      <nav class="nav-primary" aria-label="{{ has_nav_menu('primary_navigation') ? wp_get_nav_menu_name('primary_navigation') : __('Navigasi utama', 'kopi-senja') }}">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false, 'echo' => false]) !!}
        @else
          <ul class="nav">
            <li><a href="{{ home_url('/#menu') }}">{{ __('Menu', 'kopi-senja') }}</a></li>
            <li><a href="{{ home_url('/#tentang') }}">{{ __('Tentang Kami', 'kopi-senja') }}</a></li>
            <li><a href="{{ home_url('/#kunjungi') }}">{{ __('Kunjungi', 'kopi-senja') }}</a></li>
            @if ($blog = get_option('page_for_posts'))
              <li><a href="{{ get_permalink($blog) }}">{{ __('Jurnal', 'kopi-senja') }}</a></li>
            @endif
          </ul>
        @endif
      </nav>

      <div class="px-5 pb-5 md:p-0">
        <a class="btn-primary w-full md:w-auto" href="{{ home_url('/#kunjungi') }}">
          {{ __('Reservasi Meja', 'kopi-senja') }}
        </a>
      </div>
    </div>
  </div>
</header>
