@extends('layouts.dashboard_layout')
@section('dashboard_section')
<div class="row mb-4">
    <div class="col-md-5 mb-4">
        <div class="bg-image hover-overlay ripple shadow-custom rounded  mt-5 mb-4" data-ripple-color="light">
            <picture>
                <img src="{{asset('images/practice_programmer.svg')}}" class="img-fluid" height="fa-rotate-18020px" alt="Standard UI Kit">
            </picture>
        </div>
    </div>
    <div class="col-md-7 border border-5 shadow p-3 mb-5 bg-white rounded">
        <h3><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a>  
            Laravel Crud 
            <div class="float-right">
                @if (Request::route()->getName() == 'LaravelCrud.index')
                <a href="{{ route('LaravelCrud.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                <a class="ml-2" href="{{ route('deleteduser') }}"><i class="fa fa-recycle" aria-hidden="true"></i></a>
                @else
                <a href="{{ route('LaravelCrud.index') }}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                @endif
            </div>
        </h3>
        @yield('practice_section')
    </div>
</div>
@endsection

