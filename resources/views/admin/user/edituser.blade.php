@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit User <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/user/edit/{{$user->id}}" class="row g-3 mb-2" method="POST">
    @method('PUT')
    @csrf
    <div class="col-6">
      <label for="email" class="form-label">Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Email" aria-label="Email" aria-describedby="emailHelpBlock" value="{{$user->email}}" readonly>
      <div id="emailHelpBlock" class="form-text">Email anda harus valid dan tidak menggunakan email login yang sudah ada</div>
    </div>
    <div class="col-6">
      <label for="nama" class="form-label">Nama Display</label>
      <input type="text" name="nama" class="form-control" placeholder="Nama Display" aria-label="nama"aria-describedby="nameHelpBlock" value="{{$user->name}}">
      <div id="nameHelpBlock" class="form-text">Nama Display akan ditampilkan sebagai nama yang digunakan dalam admin</div>
    </div>
    <div class="col-12">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="password" aria-label="password"aria-describedby="passwordHelpBlock">
      <div id="passwordHelpBlock" class="form-text">Password anda harus valid, minimal 8 karakter</div>
    </div>
    <div class="col-12">
      <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="password_confirmation"aria-describedby="confirmHelpBlock">
      <div id="confirmHelpBlock" class="form-text">Konfirm Password anda</div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ $error }}</strong>
    </div>
    @endforeach
  @endif
  
  @if($msg = Session::get('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{$msg}}</strong>
  </div>
  @endif
@endsection