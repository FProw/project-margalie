@extends('template.dashtemplate')

@section('title', 'List Anggotas')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-user" data-fa-transform="down-1"></i>  List User</h1>
  <hr>
  <table id="datatablesSimple">
    <thead>
      <tr>
          <th>Author</th>
          <th>Title</th>
          <th>Content</th>
          <th>Image</th>
          <th>Created Date</th>
          <th>Last Updated</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Author</th>
          <th>Title</th>
          <th>Content</th>
          <th>Image</th>
          <th>Created Date</th>
          <th>Last Updated</th>
          <th>Action</th>
      </tr>
  </tfoot>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->user_id->nama}}</td>
      <td>{{$data->title}}</td>
      <td>{{ \Illuminate\Support\Str::limit($data->content, 30, $end='...') }}</td>
      <td>{{$data->image}}</td>
      <td>{{$data->created_at}}</td>
      <td>{{$data->updated_at}}</td>
      <td>
        <a href="/user/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/user/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>

  @if($delete = Session::get('delete'))
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 9999999999">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Delete</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ $delete }}
    </div>
  </div>
  @endif
@endsection