@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Slider<i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/slider/edit/{{$slider->id}}" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="col-12">
      <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Slider" aria-label="Deskripsi" value="{{$slider->description}}">
    </div>
    <div class="col-12">
      <div class="mb-1">
        <label for="image" class="form-label">Gambar </label>
        <input type="file" class="form-control" name="image" id="image" placeholder="Foto KTP" aria-describedby="fileHelpId2">
        <div id="fileHelpId2" class="form-text">Gambar </div>
      </div>
    </div>
    <div class="col-6">
      <img src="{{asset($slider->path)}}" alt="gambar" width="100%" height="auto">
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