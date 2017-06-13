{{--
  Template Name: Skills Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row hero align-items-center">
      <div class="container py-5">
        <div class="row align-items-center text-center">
          <div class="col">
            <h1 class="text-uppercase mb-5">{{ get_the_title() }}</h1>
            @while(have_rows('skills')) @php(the_row())
              <h3>{{ get_sub_field('label') }}</h3>
              <div class="pb-2">
                {!! get_sub_field('details') !!}
              </div>
            @endwhile
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
