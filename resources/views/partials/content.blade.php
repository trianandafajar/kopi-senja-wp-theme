<article @php(post_class('post-card group flex flex-col overflow-hidden rounded-card border border-espresso-900/10 bg-white/70 transition hover:-translate-y-1 hover:shadow-warm'))>
  <a class="block aspect-[16/10] overflow-hidden bg-linear-to-br from-karamel via-terracotta-500 to-espresso-800" href="{{ get_permalink() }}" tabindex="-1" aria-hidden="true">
    @if (has_post_thumbnail())
      {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'size-full object-cover transition duration-500 group-hover:scale-105', 'alt' => '']) !!}
    @endif
  </a>

  <div class="flex flex-1 flex-col p-6">
    <header>
      @include('partials.entry-meta')

      <h2 class="entry-title mt-3 text-2xl leading-snug">
        <a class="text-espresso-950 no-underline hover:text-terracotta-600" href="{{ get_permalink() }}">
          {!! $title !!}
        </a>
      </h2>
    </header>

    <div class="entry-summary mt-3 flex-1 text-sm leading-relaxed text-espresso-700">
      @php(the_excerpt())
    </div>
  </div>
</article>
