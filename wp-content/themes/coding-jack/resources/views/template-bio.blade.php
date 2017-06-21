{{--
  Template Name: Bio Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row hero align-items-center">
      <div class="container py-5">
        <div class="row align-items-center text-center">
          <div class="col">
            @include('partials.page-header')
            <div class="row py-3">
              <div class="col-lg-4 offset-lg-1 pb-3 pb-lg-0 pt-lg-2 pt-xl-3">
              {!! get_field('bio') !!}
              </div>
              <div class="col-lg-4 offset-lg-2">
                <img src="{{ get_field('picture_1') }}" class="rounded img-fluid">
              </div>
            </div>
            <div class="row py-3">
              <div class="col-lg-4 offset-lg-2 push-lg-5 pb-3 pb-lg-0 pt-lg-4 pt-xl-5">
              {!! get_field('bio_continued') !!}
              </div>
              <div class="col-lg-4 offset-lg-1 pull-lg-6">
                <img src="{{ get_field('picture_2')['url'] }}" class="rounded img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
