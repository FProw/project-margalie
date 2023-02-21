@extends('template.dashtemplate')

@section('title', 'List Gallery')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-list" data-fa-transform="down-1"></i>  List Gallery</h1>
  <hr>
  <table id="datatables" class="my-3 table table-striped" style="width:100%">
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
        <a href="/gallery/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/gallery/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
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
    $(document).ready(function(){ 
      $('#datatables').DataTable();
    })
  </script>
@endsection