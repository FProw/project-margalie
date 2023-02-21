@extends('template.dashtemplate')

@section('title', 'List User')

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-user" data-fa-transform="down-1"></i>  List User</h1>
  <hr>
  <table id="dataUser" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th>Email</th>
          <th>Nama</th>
          <th>Action</th>
        </tr>
      </thead>
  <tbody>
    @foreach($list as $key => $data)
    <tr>
      <td>{{$data->email}}</td>
      <td>{{$data->name}}</td>
      <td>
        <a href="/user/edit/{{$data->id}}" class="btn btn-secondary">Edit / Change Password</a>
        @if(strcmp($data->email,Auth::user()->email) == 0)

        @else
        <a href="/user/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
        @endif
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
  $(document).ready(function() 
  { 
    $('#dataUser').DataTable();
  })
</script>
@endsection