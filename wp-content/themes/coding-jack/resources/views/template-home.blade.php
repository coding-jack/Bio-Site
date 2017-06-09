{{--
  Template Name: Home Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row hero align-items-center">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col">
            <h1 class="font-weight-700">{{ get_field('name') }}</h1>
            <h2 class="h4 font-weight-300">{{ get_field('job_title') }}</h2>
            <h3 class="h5 font-weight-300 mb-4">{{ get_field('location') }}</h3>
            <a class="h5 font-weight-500" href="{{ get_field('page_link') }}">{{ get_field('page_link_text') }}</a>
          </div>
          <div class="col">
            <ul class="list-unstyled">
              <li>
                <a href="https://github.com/coding-jack" class="text-white" target="_blank">
                  <i class="fa fa-github fa-5x" aria-hidden="true"></i>
                </a>
              </li>
                <a href="mailto:jacksonkaufman115@gmail.com" class="text-white" target="_blank">
                  <i class="fa fa-envelope-o fa-4x py-5" aria-hidden="true"></i>
                </a>
              <li>
                <a href="tel:3036531861" class="text-white" target="_blank">
                  <i class="fa fa-phone fa-4x" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
