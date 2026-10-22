<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2b1b14">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class('min-h-screen'))>
    @php(wp_body_open())

    <div id="app" class="flex min-h-screen flex-col">
      <a class="sr-only z-50 rounded-full bg-espresso-900 px-4 py-2 text-cream-50 focus:not-sr-only focus:fixed focus:top-4 focus:left-4" href="#main">
        {{ __('Lewati ke konten', 'kopi-senja') }}
      </a>

      @include('sections.header')

      <main id="main" class="main flex-1">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar shell py-12">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
