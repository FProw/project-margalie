@extends('template.dashtemplate')

@section('title', 'List Anggota ')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>List User yang dihapus</h1>
  <hr>
  <table id="datatablesSimple">
    <thead>
      <tr>
          <th>Email</th>
          <th>Nama</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Email</th>
          <th>Nama</th>
          <th>Action</th>
      </tr>
  </tfoot>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->email}}</td>
      <td>{{$data->name}}</td>
      <td>
        <a href="/user/restore/{{$data->id}}" class="btn btn-success">Restore</a>
        <a href="/user/permadelete/{{$data->id}}" class="btn btn-danger">Delete</a>
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