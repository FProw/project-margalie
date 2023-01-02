@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Konfigurasi <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/edit/konfigurasi" class="row g-3 mb-2" method="POST">
    @method('PUT')
    @csrf
    <div class="col-12">
      <h4 class="font-poppins">Tentang Kami</h4>
      <hr>
    </div>
    <div class="col-12">
      <label for="head_tentangkami" class="form-label">About Us title</label>
      <input type="text" name="head_tentangkami" class="form-control" id="head_tentangkami"  aria-label="head_tentangkami" value="">
    </div>
    <div class="col-12">
      <label for="desc_tentangkami" class="form-label"></label>
      <textarea class="form-control" name="desc_tentangkami" id="desc_tentangkami" rows="3" value=""></textarea>
    </div>
      <div class="col-6">
        <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Belakang" aria-label="Nama Belakang" value="">
      </div>
    <div class="col-12">
      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="">
    </div>
    <div class="col-12">
      <label for="NIK" class="form-label">NIK</label>
      <input type="text" name="NIK" class="form-control" id="NIK" placeholder="NIK" aria-label="NIK" value="">
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