@extends('layouts.app')

@section('content')
  @include('partials.page-header', [
    'eyebrow' => __('Jurnal Kopi Senja', 'kopi-senja'),
    'lead' => is_home() ? __('Catatan sangrai, resep seduh, dan cerita kecil dari balik bar.', 'kopi-senja') : null,
  ])

  <div class="shell py-16">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Maaf, belum ada tulisan yang bisa ditampilkan.', 'kopi-senja') !!}
      </x-alert>

      <div class="mt-8 max-w-md">
        {!! get_search_form(false) !!}
      </div>
    @endif

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    <div class="posts-pagination mt-14">
      {!! get_the_posts_navigation([
        'prev_text' => __('&larr; Tulisan lebih lama', 'kopi-senja'),
        'next_text' => __('Tulisan lebih baru &rarr;', 'kopi-senja'),
      ]) !!}
    </div>
  </div>
@endsection
