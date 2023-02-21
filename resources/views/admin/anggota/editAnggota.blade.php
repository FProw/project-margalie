@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Anggota <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/anggota/edit/{{$anggota->id}}" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
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
          <option value="Laki-laki" {{$anggota->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
          <option value="Perempuan" {{$anggota->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
        </select>
      </div>
      <div class="col-6">
        <select class="form-select" aria-label=".form-select-lg example" name="agama">
          <option value="Buddha" {{$anggota->agama == 'Buddha' ? 'selected' : ''}}>Buddha</option>
          <option value="Konghucu" {{$anggota->agama == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
          <option value="Islam" {{$anggota->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
          <option value="Katolik" {{$anggota->agama == 'Katolik' ? 'selected' : ''}}>Katolik</option>
          <option value="Protestan" {{$anggota->agama == 'Protestan' ? 'selected' : ''}}>Protestan</option>
          <option value="Hindu" {{$anggota->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
        </select>
      </div>
    <div class="col-12">
      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{$anggota->tanggal_lahir}}">
    </div>
    <div class="col-12">
      <label for="tanggaljoin" class="form-label">Tanggal Join</label>
      <input type="date" name="tanggal_join" class="form-control" id="tanggal_join" value="{{$anggota->tanggal_join}}">
    </div>
    <div class="col-12">
      <div class="mb-1">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" >{{$anggota->alamat}}</textarea>
      </div>
    </div>
    <div class="col-12">
      <label for="NIK" class="form-label">NIK</label>
      <input type="text" class="form-control"  aria-label="NIK" value="{{$anggota->NIK}}" disabled>
    </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="pasfoto" class="form-label">Gambar Pas-Foto</label>
        <input type="file" class="form-control" name="pasfoto" id="pasfoto" placeholder="Pas Foto" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Gambar pas foto</div>
        <img src="{{asset($anggota->pasfoto)}}" alt="pasfoto" width="100%">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="fotoktp" class="form-label">Gambar Ktp</label>
        <input type="file" class="form-control" name="fotoktp" id="fotoktp" placeholder="Foto KTP"  value="{{old('fotoktp')}}" aria-describedby="fileHelpId2">
        <div id="fileHelpId2" class="form-text">Gambar Ktp</div>
      </div>
      <img src="{{asset($anggota->fotoktp)}}" alt="fotoktp" width="100%">
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