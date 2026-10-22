@extends('layouts.app')

@section('content')
  <section class="shell grid min-h-[60vh] place-items-center py-24 text-center">
    <div class="max-w-xl">
      <p class="font-display text-8xl font-semibold text-terracotta-500 md:text-9xl" aria-hidden="true">404</p>
      <h1 class="mt-4 text-3xl md:text-4xl">{{ __('Halaman tidak ditemukan', 'kopi-senja') }}</h1>

      @if (! have_posts())
        <p class="mt-4 text-espresso-700">
          {!! __('Sepertinya cangkir ini kosong. Halaman yang Anda cari tidak ada atau sudah dipindahkan.', 'kopi-senja') !!}
        </p>

        <div class="mx-auto mt-8 max-w-md text-left">
          {!! get_search_form(false) !!}
        </div>
      @endif

      <a class="btn-primary mt-8" href="{{ home_url('/') }}">{{ __('Kembali ke beranda', 'kopi-senja') }}</a>
    </div>
  </section>
@endsection
