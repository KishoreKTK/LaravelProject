@extends('practice.practice_layout')
@section('practice_section')

<div class="table-responsive mt-4">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>User</th>
        <th>Description</th>
        <th width="150px">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($user_data) != 0)
        @foreach ($user_data as $key=>$user)
        <tr>
            <td>{{ $key + $user_data->firstItem() }}</td>
            <td>{{ $user->uname }}</td>
            <td>{{ $user->describe }}</td>
            <td>
                <form action="{{ route('LaravelCrud.destroy',$user->id) }}" method="POST">
                  <a class="btn btn-outline-info btn-sm" href="{{ route('LaravelCrud.show',$user->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                  <a class="btn btn-outline-warning btn-sm" href="{{ route('LaravelCrud.edit',$user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
      @else
      <tr><td colspan="4"><center>No Record Found</center></td></tr>
      @endif
    </tbody>
  </table>
  @if(count($user_data) != 0)
  {!! $user_data->links() !!}
  @endif
</div>
@endsection