@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Anggota <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/gallery/edit/{{$gallery->id}}" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    @csrf
    <div class="col-12">
      <input type="text" name="title" class="form-control" id="title" placeholder="Judul" aria-label="title" value="{{$gallery->title}}">
    </div>
      <div class="col-12">
        <input type="text" name="description" class="form-control" placeholder="Deskripsi" aria-label="Deskripsi" value="{{$gallery->description}}">
      </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" class="form-control" name="image" id="image" placeholder="Pas Foto"  value="{{old('image')}}" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text">Gambar untuk gallery</div>
      </div>
    </div>
    <div class="col-6">
      <img src="{{asset($gallery->imagepath)}}" alt="gambar" width="100%" height="auto">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
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