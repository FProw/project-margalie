@extends('template.dashtemplate')

@section('title', 'Dashboard')

@section('content')
  <h1 class="my-3">Welcome {{Auth::user()->name}}!</h1>
  <p class="fs-5">Selamat datang pada halaman Dashboard Admin Organisasi Marga Lie Pekanbaru</p>
  <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mb-4 border border-dark border-2">
          <div class="card-header text-white bg-primary">Jumlah Anggota</div>
          <div class="card-body text-black fs-3 bg-secondary bg-opacity-25">{{$anggota}}</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mb-4 border border-dark border-2">
          <div class="card-header text-white bg-warning">Jumlah User</div>
          <div class="card-body text-black fs-3 bg-secondary bg-opacity-25">{{$user}}</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mb-4 border border-dark border-2">
          <div class="card-header text-white bg-success">Jumlah Berita/Blog</div>
          <div class="card-body text-black fs-3 bg-secondary bg-opacity-25">{{$blog}}</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card mb-4 border border-dark border-2">
        <div class="card-header text-white bg-danger">Jumlah Gambar</div>
        <div class="card-body text-black fs-3 bg-secondary bg-opacity-25">{{$gallery}}</div>
      </div>
  </div>
  <p class="fs-5">Untuk mengatur data, silahkan menggunakan menu-menu yang ada pada sidebar (menu disamping).</p>
@endsection