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
        <div class="card bg-danger text-black mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection