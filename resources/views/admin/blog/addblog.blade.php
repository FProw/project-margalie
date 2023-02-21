@extends('template.dashtemplate')

@section('title', 'Tambah Blog')

@section('content')
  <h1 class="my-3"> <i class="fa-solid fa-newspaper fa-xs" data-fa-transform="down-2"></i> Tambah Blog</h1>
  <hr/>
  <form action="/addblog" class="row g-3 mb-2" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
      <label for="title" class="form-label">Judul Blog</label>
      <input type="text" name="title" class="form-control" placeholder="Judul Blog" aria-label="title"aria-describedby="titleHelpBlock">
      <div id="titleHelpBlock" class="form-text">Judul dari Blog yang akan dibuat</div>
    </div>
    <div class="col-12">
      <label for="content" class="form-label">Isi Blog</label>
      <textarea class="form-control" name="content" id="content" aria-label="content" aria-describedby="contentHelpBlock"></textarea>
      <div id="contentHelpBlock" class="form-text">Judul dari Blog yang akan dibuat</div>
    </div>
    <div class="col-12">
      <label for="image" class="form-label">Pilih Gambar</label>
      <input type="file" class="form-control" name="image" id="image" placeholder="Pilih Gambar" aria-describedby="fileHelpId">
      <div id="fileHelpId" class="form-text">Pilih Gambar yang akan ditampilkan untuk blog</div>
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
      tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      init_instance_callback : function(editor) {
      var freeTiny = document.querySelector('.tox .tox-notification--in');
      freeTiny.style.display = 'none';
    }
    });
    </script>
@endsection