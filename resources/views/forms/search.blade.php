<form role="search" method="get" class="search-form flex gap-2" action="{{ home_url('/') }}">
  <label class="flex-1">
    <span class="sr-only">
      {{ _x('Cari:', 'label', 'kopi-senja') }}
    </span>

    <input
      class="w-full rounded-full border border-espresso-900/15 bg-white px-5 py-3 text-sm text-espresso-900 placeholder:text-espresso-300 focus:border-terracotta-500 focus:outline-none"
      type="search"
      placeholder="{!! esc_attr_x('Cari menu, resep, cerita&hellip;', 'placeholder', 'kopi-senja') !!}"
      value="{!! get_search_query() !!}"
      name="s"
    >
  </label>

  <button class="btn-primary shrink-0" type="submit">{{ _x('Cari', 'submit button', 'kopi-senja') }}</button>
</form>
