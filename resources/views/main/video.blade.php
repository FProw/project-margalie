@extends('template.template')

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
<main id="site-main">
    <section class="article-area container mx-auto pt-10">
      <div class="area-title text-center font-poppins slide-in">
          <span class="text-red">Video Terbaru</span>
          <h1 class="text-lg text-dark">Video-video organisasi kami</h1>
      </div>
      
      <div class="grid cols-1 lg-cols-3 font-poppins py-10">
          <div class="card animate__animated animate__fadeInLeft flex flex-column h-100 btn-shadow">
              <div class="flex-grow bg-gray flex">
                @if ($video[0]->youtube_id)
                <div class="iframe-container">
                    <iframe src="https://www.youtube.com/embed/{{$video[0]->youtube_id}}" frameborder="0"></iframe>
                  </div>
                @elseif($video[0]->path)
                <div class="iframe-container">
                    <video width="320" height="240" controls>
                      <source src="{{Storage::url($video[0]->path)}}" type="video/mp4">
                    </video>
                  </div>
                @endif
            </div>
            <div class="px-5 py-5 overflow no-white elipsis text-center">
                <a href="#">
                    <h2 class="text-dark">{{$video[0]->title}}</h2>
                </a>
            </div>
          </div>
          
          <div class="card animate__animated animate__fadeInLeft flex flex-column h-100 btn-shadow">
            <div class="flex-grow bg-gray flex">
              @if ($video[1]->youtube_id)
              <div class="iframe-container">
                  <iframe src="https://www.youtube.com/embed/{{$video[1]->youtube_id}}" frameborder="0"></iframe>
                </div>
              @elseif($video[1]->path)
              <div class="iframe-container">
                  <video width="320" height="240" controls>
                    <source src="{{Storage::url($video[1]->path)}}" type="video/mp4">
                  </video>
                </div>
              @endif
          </div>
          <div class="px-5 py-5 overflow no-white elipsis text-center">
              <a href="#">
                  <h2 class="text-dark">{{$video[1]->title}}</h2>
              </a>
          </div>
        </div>
        <div class="card animate__animated animate__fadeInLeft flex flex-column h-100 btn-shadow">
            <div class="flex-grow bg-gray flex">
              @if ($video[2]->youtube_id)
              <div class="iframe-container">
                  <iframe src="https://www.youtube.com/embed/{{$video[2]->youtube_id}}" frameborder="0"></iframe>
                </div>
              @elseif($video[2]->path)
              <div class="iframe-container">
                  <video width="320" height="240" controls>
                    <source src="{{Storage::url($video[2]->path)}}" type="video/mp4">
                  </video>
                </div>
              @endif
          </div>
          <div class="px-5 py-5 overflow no-white elipsis text-center">
              <a href="#">
                  <h2 class="text-dark">{{$video[2]->title}}</h2>
              </a>
          </div>
        </div>
  </section>
  <section>
    {{-- <div class="container">
        <h1>Video-video Kami</h1>
        <div class="container-video">
            <ul>
                @foreach
                <li>
                    
                </li>
                @endforeach
            </ul>
        </div>1
    </div>
  </section> --}}
</main>
</section>
@endsection