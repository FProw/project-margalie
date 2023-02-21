@extends('template.dashtemplate')

@section('title', 'Tambah Video')

@section('content')
  <h1 class="my-3">Tambah Video <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/addVideos" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
      <label for="title" class="form-label">Judul</label>
      <input type="text" name="title" class="form-control" placeholder="Nama Judul" aria-label="title" aria-describedby="titleHelpBlock">
      <div id="titleHelpBlock" class="form-text">Judul Video yang akan di upload</div>
    </div>
    <div class="col-6">
      <div class="mb-1">
        <label for="video" class="form-label">Video</label>
        <input type="file" class="form-control" name="video" id="video" placeholder="Foto KTP"  value="{{old('video')}}" aria-describedby="fileHelpId2">
        <div id="fileHelpId2" class="form-text">Video yang akan diupload (Hanya upload salah satu antara video dan youtube_id)</div>
      </div>
    </div>
    <div class="col-12">
      <label for="youtube_id" class="form-label">Youtube ID</label>
      <input type="text" name="youtube_id" class="form-control" placeholder="Youtube Video ID" aria-label="youtube_id" aria-describedby="idHelpBlock" id="youtube_id">
      <div id="idHelpBlock" class="form-text">ID dari Video Youtube yang diambil dari bagian akhir video youtube. Contohnya adalah https://www.youtube.com/watch?v=<span style="color: red">1so4Fdb37Uw</span>, dimana video id adalah susunan huruf dan kata yang bewarna merah (Hanya input salah satu antara Youtube ID atau Video)</div>
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

@section('script')
  <script>
    $(document).ready( function() {
      $('#video').on('change', () => {
        if( $('#video').get(0).files.length > 0){
          $('#youtube_id').prop('disabled', true);
        }
        else
        $('#youtube_id').prop('disabled', false);
      })
      $('#youtube_id').on('keyup', () => {
        if( $('#youtube_id').val()){
          $('#video').prop('disabled', true);
        }
        else
        $('#video').prop('disabled', false);
      })
    })
  </script>
@endsection