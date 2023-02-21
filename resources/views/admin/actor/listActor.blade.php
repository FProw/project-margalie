@extends('template.dashtemplate')

@section('title', 'List Struktur')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>  List Struktur</h1>
  <hr>
  <table id="datatables" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th style="display: none;">Priority Order</th>
          <th>Nama</th>
          <th>Posisi</th>
          <th>Nama Atasan</th>
          <th>Aksi</th>
        </th>
      </thead>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td style="display: none;">{{ $data->prioritas }}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->posisi}}</td>
      <td>{{$data->manager_name}}</td>
      <td>
        <a href="/actor/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/actor/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
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

@section('script')
<script>
    $(document).ready(function() {
        $('#datatables').DataTable().sort(1, 'asc');
    });
</script>
@endsection