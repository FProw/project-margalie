@extends('template.dashtemplate')

@section('title', 'List Anggotas')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-newspaper" data-fa-transform="down-1"></i>  List Blog</h1>
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
        <a href="/blog/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/blog/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
        <a href="/blog/{{$data->slug}}" class="btn btn-info">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>

  @if($delete = Session::get('delete'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Hapus Berhasil</strong>
  </div>
  @endif
@endsection