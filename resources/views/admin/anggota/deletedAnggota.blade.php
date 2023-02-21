@extends('template.dashtemplate')

@section('title', 'List Anggota Terhapus')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>  List Anggota Terhapus</h1>
  <hr>
  <table id="datatablesSimple" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th>Email</th>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Tanggal Lahir</th>
          <th>NIK</th>
          <th>Action</th>
        </tr>
      </thead>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->email}}</td>
      <td>{{$data->nama_depan}}</td>
      <td>{{$data->nama_belakang}}</td>
      <td>{{$data->tanggal_lahir}}</td>
      <td>{{$data->NIK}}</td>
      <td>
        
        <a href="/anggota/restore/{{$data->id}}" class="btn btn-success">Restore</a>
        <a href="/anggota/permadelete/{{$data->id}}" class="btn btn-danger">Permanent Delete</a>
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