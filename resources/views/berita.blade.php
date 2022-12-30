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
                <img src="../assets/articles/img1.png" class="w-100" alt="">
                <div class="px-5 py-5">
                    <span class="text-gray">Category 6 hours ago</span>
                    <a href="#">
                        <h2 class="text-dark">Free advertizing of your online business</h2>
                    </a>
                </div>
            </article>
        </div>
        
        <div class="card animate__animated animate__fadeIn">
            <article class="btn-shadow">
                <img src="../assets/articles/img2.png" class="w-100" alt="">
                <div class="px-5 py-5">
                    <span class="text-gray">Category 6 hours ago</span>
                    <a href="#">
                        <h2 class="text-dark">Free advertizing of your online business</h2>
                    </a>
                </div>
            </article>
        </div>
        <div class="card animate__animated animate__fadeInRight">
            <article class="btn-shadow">
                <img src="../assets/articles/img3.png" class="w-100" alt="">
                <div class="px-5 py-5">
                    <span class="text-gray">Category 6 hours ago</span>
                    <a href="#">
                        <h2 class="text-dark">Free advertizing of your online business</h2>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>
  </main>
<!-- end article area -->
    
@endsection