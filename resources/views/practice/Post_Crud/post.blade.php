@extends('layouts.dashboard_layout')
@section('pagecss')
<link href="{{ asset('css/post.css') }}" rel="stylesheet" id="bootstrap-css">
@endsection
@section('dashboard_section')
<section>
{{--  <p>ID : {{ $id }}</p>  --}}
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
  @endif
    <h5>Posts
        @if($id == '3')
        <button class="badge badge-dark" id="AddPostId">Add</button>
        @endif
        <div class="float-right">
            <button class="badge badge-info @if($id == '3')active @else badge-outlined @endif"><a href="@if($id == '3')# @else {{ url('LaravelCrud_demo/3') }} @endif">AJAX</a></button>
            {{--  <button class="badge badge-info @if($id == '2')active @else badge-outlined @endif"><a href="@if($id == '2')# @else {{ url('LaravelCrud_demo/2') }} @endif">LIVEWIRE</a></button>  --}}
            <button class="badge badge-info @if($id == '1')active @else badge-outlined @endif"><a href="@if($id == '1')# @else {{ url('LaravelCrud_demo/1') }} @endif">API</a></button>
        </div>
    </h5>
    <div class="row mt-2 Add_Post_RowClass">
        <div class="col bg-white border shadow  p-3">
            <div class="mb-2"><strong>Add Post</strong>
                <button type="button" id="CloseAddPost" class="close float-right" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="AddPostForm" autocomplete="off" enctype="multipart/form-data">
                <div class="row">                   
                    <div class="col-7">
                        <input type="text" class="form-control" name="title" placeholder="Post Title">
                    </div>
                    <div class="col-5">
                        <input type="file" name="files" id="fileID">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-7">
                        <textarea class="form-control" name="description" required id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col bg-white border shadow  p-3">
            @if($id == '3')
            <div class="mb-2 center"><strong>Posts</strong></div>
            <div class="card-columns">
                <div class="card"> <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title that wraps to a new line</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                {{--  <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer"> <small class="text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small> </footer>
                    </blockquote>
                </div>
                <div class="card"> <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer class="blockquote-footer"> <small>
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small> </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card"> <img class="card-img" src="..." alt="Card image"> </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer"> <small class="text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small> </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>  --}}
            </div>
            @elseif($id == '1')
            <div class="mb-2 center"><strong>API</strong></div>
            @endif
        </div>
    </div>
</section>
@endsection

@section('pagescript')
<script src="{{ asset('js/pages/PostScript.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
@endsection