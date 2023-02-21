@extends('template.dashtemplate')

@section('title', 'Edit Info')

@section('content')
  <h1 class="my-3">Edit Anggota <i class="fa-solid fa-person fa-xs" data-fa-transform="down-2"></i></h1>
  <hr/>
  <form action="/actor/edit/{{$data->id}}" class="row g-3 mb-2" method="POST">
    @method('PUT')
    @csrf
    <div class="col-6">
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" aria-label="nama" value="{{$data->nama}}">
    </div>
      <div class="col-6">
        <input type="text" name="posisi" class="form-control" placeholder="Posisi" aria-label="posisi" value="{{$data->posisi}}">
      </div>
      <div class="col-12">
        <div class="mb-3">
          <label for="bawahan" class="form-label">Bawahan Dari :</label>
          <select class="form-select" name="bawahan" id="bawahan" data-live-search="true">
            <option selected>Select one</option>
            @foreach ($actor as $item)
                <option value="{{$item->id}}" {{$item->id == $data->manager_id ? 'selected' : ''}}> {{$item->nama}} | {{$item->posisi}}</option>
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