<article @php(post_class('h-entry'))>
  <header class="border-b border-espresso-900/10 bg-cream-100">
    <div class="shell py-16 md:py-20">
      <div class="mx-auto max-w-3xl">
        <p class="eyebrow">{{ __('Jurnal', 'kopi-senja') }}</p>

        <h1 class="p-name mt-3 text-4xl md:text-6xl">
          {!! $title !!}
        </h1>

        <div class="mt-6">
          @include('partials.entry-meta')
        </div>
      </div>
    </div>
  </header>

  @if (has_post_thumbnail())
    <div class="shell pt-10">
      <figure class="mx-auto max-w-5xl overflow-hidden rounded-card shadow-warm">
        {!! get_the_post_thumbnail(null, 'large', ['class' => 'w-full object-cover']) !!}
      </figure>
    </div>
  @endif

  <div class="shell py-14">
    <div class="e-content entry-content mx-auto max-w-3xl">
      @php(the_content())
    </div>

    @if ($pagination())
      <footer class="mx-auto mt-10 max-w-3xl">
        <nav class="page-nav" aria-label="{{ __('Halaman tulisan', 'kopi-senja') }}">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif

    <div class="mx-auto mt-16 max-w-3xl">
      @php(comments_template())
    </div>
  </div>
</article>
