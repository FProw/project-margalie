@extends('template.dashtemplate')

@section('title', 'Tambah Gallery')

@section('content')
  <h1 class="my-3">Tambah Gallery <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/addGallery" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" aria-label="title" value="{{old('title')}}">
    </div>
      <div class="col-12">
        <input type="text" name="description" class="form-control" placeholder="description" aria-label="Deskripsi" value="{{old('description')}}">
      </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" name="image" id="image" placeholder="Pas Foto"  value="{{old('image')}}" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Gambar pas foto</div>
      </div>
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
  
@endsection