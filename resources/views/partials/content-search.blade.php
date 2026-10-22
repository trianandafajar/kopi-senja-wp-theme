<article @php(post_class('border-b border-espresso-900/10 py-8 first:pt-0'))>
  <header>
    @includeWhen(get_post_type() === 'post', 'partials.entry-meta')

    <h2 class="entry-title mt-2 text-2xl">
      <a class="text-espresso-950 no-underline hover:text-terracotta-600" href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
  </header>

  <div class="entry-summary mt-2 text-espresso-700">
    @php(the_excerpt())
  </div>
</article>
