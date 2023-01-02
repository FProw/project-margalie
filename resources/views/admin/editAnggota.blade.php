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
      <div class="col-6">
        <select class="form-select" aria-label=".form-select-lg example" name="jenis_kelamin" >
          <option selected>Pilih Jenis Kelamin</option>
          <option value="Laki-laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="col-6">
        <select class="form-select" aria-label=".form-select-lg example" name="agama">
          <option selected>Pilih Agama</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
          <option value="Islam">Islam</option>
          <option value="Katolik">Katolik</option>
          <option value="Protestan">Protestan</option>
          <option value="Hindu">Hindu</option>
        </select>
      </div>
    <div class="col-12">
      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{old('tanggal_lahir')}}">
    </div>
    <div class="col-12">
      <label for="tanggaljoin" class="form-label">Tanggal Join</label>
      <input type="date" name="tanggal_join" class="form-control" id="tanggal_join" value="{{old('tanggal_join')}}">
    </div>
    <div class="col-12">
      <div class="mb-1">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" value="{{old('alamat')}}"></textarea>
      </div>
    </div>
    <div class="col-12">
      <label for="NIK" class="form-label">NIK</label>
      <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK" aria-label="NIK" value="{{old('nik')}}">
    </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="pasfoto" class="form-label">Gambar Pas-Foto</label>
        <input type="file" class="form-control" name="pasfoto" id="pasfoto" placeholder="Pas Foto"  value="{{old('pasfoto')}}" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Gambar pas foto</div>
      </div>
    </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="fotoktp" class="form-label">Gambar Ktp</label>
        <input type="file" class="form-control" name="fotoktp" id="fotoktp" placeholder="Foto KTP"  value="{{old('fotoktp')}}" aria-describedby="fileHelpId2">
        <div id="fileHelpId2" class="form-text">Gambar Ktp</div>
      </div>
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