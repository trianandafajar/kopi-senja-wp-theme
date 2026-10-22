<p class="entry-meta flex flex-wrap items-center gap-x-2 text-xs font-medium tracking-wide text-espresso-500 uppercase">
  <time class="dt-published" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>

  <span aria-hidden="true">&middot;</span>

  <span>
    {{ __('Oleh', 'kopi-senja') }}
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="p-author h-card text-espresso-700 no-underline hover:text-terracotta-600">
      {{ get_the_author() }}
    </a>
  </span>
</p>
