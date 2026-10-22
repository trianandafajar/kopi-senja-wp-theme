<div class="entry-content mx-auto max-w-3xl">
  @php(the_content())
</div>

@if ($pagination())
  <nav class="page-nav mx-auto mt-10 max-w-3xl" aria-label="{{ __('Halaman', 'kopi-senja') }}">
    {!! $pagination !!}
  </nav>
@endif
