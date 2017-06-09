{{--
  Template Name: Bio Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row hero align-items-center">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col">
            @include('partials.page-header')
            <div class="row py-3">
              <div class="col-lg-4 offset-lg-1">
              {!! get_field('bio') !!}
              </div>
              <div class="col-lg-4 offset-lg-2">
                <img src="https://media.giphy.com/media/MGYY2FIs8VrfW/giphy.gif" class="w-100 img-fluid">
              </div>
            </div>
            <div class="row py-3">
              <div class="col-lg-4 offset-lg-2 push-lg-5">
              {!! get_field('bio_continued') !!}
              </div>
              <div class="col-lg-4 offset-lg-1 pull-lg-6">
                <img src="https://media.giphy.com/media/3t7RAFhu75Wwg/giphy.gif" class="w-100 img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
