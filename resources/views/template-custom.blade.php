{{--
  Template Name: Halaman Lebar
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <div class="shell py-14">
      <div class="entry-content">
        @php(the_content())
      </div>
    </div>
  @endwhile
@endsection
