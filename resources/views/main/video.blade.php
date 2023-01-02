@extends('template.template')

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
                <iframe src="https://www.youtube.com/embed/1so4Fdb37Uw" title="YouTube video player" frameborder="0"  allowfullscreen class="w-100 "></iframe>
            </div>
            <div class="px-5 py-5 overflow no-white elipsis text-center">
                <a href="#">
                    <h2 class="text-dark">Video</h2>
                </a>
            </div>
          </div>
          
          <div class="card animate__animated animate__fadeIn">
              <article class="btn-shadow">
                <div class="flex-grow bg-gray flex">
                    <iframe src="https://www.youtube.com/embed/aleIj4vKU0c" title="YouTube video player" frameborder="0"  allowfullscreen class="w-100 "></iframe>
                </div>
                  <div class="px-5 py-5 overflow no-white elipsis text-center">
                    <a href="#">
                        <h2 class="text-dark">Video</h2>
                    </a>
                  </div>
              </article>
          </div>
          <div class="card animate__animated animate__fadeInRight">
              <article class="btn-shadow">
                <div class="flex-grow bg-gray flex">
                    <iframe src="https://www.youtube.com/embed/eIUpddt7JpE" title="YouTube video player" frameborder="0"  allowfullscreen class="w-100 "></iframe>
                </div>
                  <div class="px-5 py-5 overflow no-white elipsis text-center">
                    <a href="#">
                        <h2 class="text-dark">Video</h2>
                    </a>
                  </div>
              </article>
          </div>
      </div>
  </section>
    </main>
</section>
@endsection