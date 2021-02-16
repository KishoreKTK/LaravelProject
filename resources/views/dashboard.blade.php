@extends('layouts.dashboard_layout')

@section('pagecss')
  {{--  <link href="{{ asset('Plugins/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('Plugins/slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">
  <style>
        .slider {
          width: 100%;
          margin: auto;
        }

        .slick-slide {
          margin: 0px 20px;
        }
    
        .slick-slide img {
          width: 100%;
        }
    
        .slick-prev:before,
        .slick-next:before {
          color:#20c997;
        } --}}
    {{--  <style>
        @media (min-width: 576px) {
          .card-columns {
            column-count: 2;
          }
        }

        @media (min-width: 768px) {
          .card-columns {
            column-count: 3;
          }
        }

        @media (min-width: 992px) {
          .card-columns {
            column-count: 4;
          }
  </style>   --}}
@endsection

@section('dashboard_section')
      <section class="regular card-columns slider theme_clr">
        <div class="card bg-white rounded shadow p-2 mb-3" style="max-width: 500px;">
          <div class="card-header">
            <h5 class="card-title">SAMPLE CRUD</h5>
          </div>
          <div class="card-body">               
              <p class="card-text"><small>This Perfomrms CRUD, Validation for all types of input fields Soft Delete and contains Pagination</small></p>
          </div>
          <a href="{{ url('LaravelCrud') }}" class="badge badge-primary float-right m-2">DEMO</a>
        </div>
        <div class="card bg-white rounded shadow p-2 mb-3" style="max-width: 500px;">
          <div class="card-header">
            <h5 class="card-title">LARAVEL CRUD</h5>
          </div>
          <div class="card-body">               
              <p class="card-text"><small>This Perfomrms CRUD For Post from Same Table in Different Category</small></p>
          </div>
          
          <a href="{{ url('LaravelCrud_demo/1') }}" class="badge badge-secondary float-right m-2">API</a>
          {{--  <a href="{{ url('LaravelCrud_demo/2') }}" class="badge badge-success float-right m-2">LIVEWIRE</a>            --}}
          <a href="{{ url('LaravelCrud_demo/3') }}" class="badge badge-primary float-right m-2">AJAX</a>
        </div>
      </section>
@endsection

@section('pagescript')
{{--  <script src="{{ asset('Plugins/slick-1.8.1/slick/slick.js') }}" charset="utf-8"></script>  --}}
<script>
{{--      
    $(document).ready(function(){
        $(".regular").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });   
    });  --}}

</script>
@endsection