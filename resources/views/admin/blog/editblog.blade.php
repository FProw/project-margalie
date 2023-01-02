@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Anggota <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/anggota/edit/{{$anggota->id}}" class="row g-3 mb-2" method="POST">
    @method('PUT')
    @csrf
    <div class="col-12">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email" aria-label="Email" value="{{$anggota->email}}">
    </div>
      <div class="col-6">
        <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" aria-label="Nama Depan" value="{{$anggota->nama_depan}}">
      </div>
      <div class="col-6">
        <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" aria-label="Nama Belakang" value="{{$anggota->nama_belakang}}">
      </div>
    <div class="col-12">
      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{$anggota->tanggal_lahir}}">
    </div>
    <div class="col-12">
      <label for="NIK" class="form-label">NIK</label>
      <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK" aria-label="NIK" value="{{$anggota->NIK}}">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger alert-block">
        <strong>{{ $error }}</strong>
      </div>
    @endforeach
  @endif

  @if ($msg = Session::get('msg'))
    <div class="alert alert-success alert-block">
      <strong>{{ $msg }}</strong>
    </div>
  @endif
@endsection