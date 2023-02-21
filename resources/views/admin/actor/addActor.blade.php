@extends('template.dashtemplate')

@section('title', 'Tambah Anggota')

@section('content')
  <h1 class="my-3">Tambah struktur <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/addActor" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-6">
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" aria-label="nama" value="{{old('nama')}}">
    </div>
      <div class="col-6">
        <input type="text" name="posisi" class="form-control" placeholder="Posisi" aria-label="posisi" value="{{old('posisi')}}">
      </div>
      <div class="col-12">
        <div class="mb-3">
          <label for="bawahan" class="form-label">Bawahan Dari :</label>
          <select class="form-select" name="bawahan" id="bawahan" data-live-search="true">
            <option selected>Select one</option>
            @foreach ($actor as $item)
                <option value="{{$item->id}}">{{$item->nama}} | {{$item->posisi}}</option>
            @endforeach
          </select>
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
@section('script')
    <script>
    $(document).ready(function() {
    $('#bawahan').select2({
        theme: 'bootstrap-5'
    });
});
</script>
@endsection