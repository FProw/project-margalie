@extends('template.template')
@section('content')
  <!-- article area -->
  <main id="site-main">
  <section class="article-area container mx-auto pt-10">
    <div class="area-title text-center font-poppins slide-in">
        <span class="text-red">Berita Terbaru kami</span>
        <h1 class="text-lg text-dark">Berita diupdate setiap Minggu</h1>
    </div>

    <div class="grid cols-1 lg-cols-3 font-poppins py-10">
        <div class="card animate__animated animate__fadeInLeft">
            <article class="btn-shadow">
                <img src="{{asset('assets/slider/margalie1.jpeg')}}" class="w-100" alt="">
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Posted {{$latest[0]->created_at->diffForHumans()}}</span>
                    <a href="/blog/{{$latest[0]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[0]->title)}}</h2>
                    </a>
                </div>
            </article>
        </div>
        
        <div class="card animate__animated animate__fadeIn">
            <article class="btn-shadow">
                <img src="../assets/articles/img2.png" class="w-100" alt="">
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Posted {{$latest[1]->created_at->diffForHumans()}}</span>
                    <a href="{{$latest[1]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[1]->title)}}</h2>
                    </a>
                </div>
            </article>
        </div>
        <div class="card animate__animated animate__fadeInRight">
            <article class="btn-shadow">
                <img src="../assets/articles/img3.png" class="w-100" alt="">
                <div class="px-5 py-5 overflow no-white elipsis">
                    <span class="text-gray">Posted {{$latest[2]->created_at->diffForHumans()}}</span>
                    <a href="{{$latest[2]->slug}}">
                        <h2 class="text-dark">{{strtoupper($latest[2]->title)}}</h2>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>
  </main>
<!-- end article area -->
    
@endsection