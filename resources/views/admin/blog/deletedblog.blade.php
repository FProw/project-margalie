@extends('template.dashtemplate')

@section('title', 'List Blog yang dihapus')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>List Blog yang dihapus</h1>
  <hr>
  <table id="datatablesSimple" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
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
<tbody>
  @foreach($list as $key => $data)
  <tr>
    {{-- {{dd($data->user->name)}} --}}
    <td>{{$data->user->name}}</td>
    <td>{{$data->title}}</td>
    <td>{{ \Illuminate\Support\Str::limit($data->content, 30, $end='...') }}</td>
    <td>{{$data->image}}</td>
    <td>{{$data->created_at}}</td>
    <td>{{$data->updated_at}}</td>
    <td>
      <a href="/blog/restore/{{$data->id}}" class="btn btn-success">Restore</a>
      <a href="/blog/permadelete/{{$data->id}}" class="btn btn-danger">Permanent Delete</a>

    </td>
  </tr>
  @endforeach
</tbody>
  </table>

  @if($delete = Session::get('delete'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{$delete}}</strong>
  </div>
  @endif
  
  @if($success = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{$success}}</strong>
  </div>
  @endif
@endsection

{{-- <td>
  <a href="/user/restore/{{$data->id}}" class="btn btn-success">Restore</a>
  <a href="/user/permadelete/{{$data->id}}" class="btn btn-danger">Delete</a>
</td> --}}