@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['eyebrow' => __('Pencarian', 'kopi-senja')])

  <div class="shell py-16">
    <div class="max-w-3xl">
      <div class="mb-10 max-w-md">
        {!! get_search_form(false) !!}
      </div>

      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Maaf, tidak ada hasil yang cocok. Coba kata kunci lain.', 'kopi-senja') !!}
        </x-alert>
      @endif

      @while(have_posts()) @php(the_post())
        @include('partials.content-search')
      @endwhile

      <div class="posts-pagination mt-10">
        {!! get_the_posts_navigation([
          'prev_text' => __('&larr; Hasil sebelumnya', 'kopi-senja'),
          'next_text' => __('Hasil berikutnya &rarr;', 'kopi-senja'),
        ]) !!}
      </div>
    </div>
  </div>
@endsection
