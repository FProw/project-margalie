@extends('template.dashtemplate')

@section('title', 'List Video')

@section('styles')
<style>
  .iframe-container{
    position: relative;
    width: 100%;
    padding-top: 56.25%; 
    height: 0;
  }
  .iframe-container iframe,.iframe-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
@endsection

@section('content')
  <h1 class="my-3"><i class="fa-solid fa-user" data-fa-transform="down-1"></i>  List Video</h1>
  <hr>  
  <table id="dataUser" class="my-3 table table-striped" style="width:100%">
    <thead class="table-dark">
      <tr>
          <th>Title</th>
          <th>Video</th>
          <th>Youtube Link</th>
          <th>Action</th>
        </tr>
      </thead>
  <tbody>
    @foreach($videos as $key => $data)
    <tr>
      <td>{{$data->title}}</td>
      <td>
        @if($data->path)
        <div class="iframe-container">
          <video width="320" height="240" controls>
            <source src="{{Storage::url($data->path)}}" type="video/mp4">
          </video>
        </div>
        <a href="{{Storage::url($data->path)}}" target="_blank">Link Video</a>
        @else
        Kosong
        @endif
      </td>
      <td>
        @if($data->youtube_id)
        <div class="iframe-container">
          <iframe src="https://www.youtube.com/embed/{{$data->youtube_id}}" frameborder="0"></iframe>
        </div>
        <a href="https://www.youtube.com/watch?v={{$data->youtube_id}}" target="_blank">Link Ke Youtube</a>
        @else
        Kosong
        @endif
      </td>
      <td>
        <a href="/videos/edit/{{$data->id}}" class="btn btn-secondary">Edit</a>
        <a href="/videos/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>

  @if($delete = Session::get('delete'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Hapus Berhasil</strong>
  </div>
  @endif
@endsection
@section('script')
<script>
  $(document).ready(function() 
  { 
    $('#dataUser').DataTable();
  })
</script>
@endsection