{{--
  Beranda Kopi Senja.
  Disusun dari bagian-bagian di resources/views/sections/home.
--}}

@extends('layouts.app')

@section('content')
  @include('sections.home.hero')
  @include('sections.home.menu')

  @while (have_posts()) @php(the_post())
    @if (is_page() && trim(get_the_content()) !== '')
      <section class="shell py-20">
        <div class="entry-content mx-auto max-w-3xl">
          @php(the_content())
        </div>
      </section>
    @endif
  @endwhile
@endsection
