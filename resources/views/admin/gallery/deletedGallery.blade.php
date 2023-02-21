@extends('template.dashtemplate')

@section('title', 'List Anggota ')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>  List Anggota</h1>
  <hr>
  <table id="datatablesSimple" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </thead>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->title}}</td>
      <td>{{$data->description}}</td>
      <td>
        <a href="{{asset($data->imagepath)}}" target="_blank" rel="noopener noreferrer">link</a>
      </td>
      <td>
        <a href="/gallery/restore/{{$data->id}}" class="btn btn-success">Edit</a>
        <a href="/gallery/permadelete/{{$data->id}}" class="btn btn-danger">Delete</a>
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