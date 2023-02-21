@extends('template.template')
@section('content')
<div id="particle-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>

<!-- Banner Area -->
<section class="banner-area font-poppins mb-5">
    <div class="container mx-auto banner-title">
        <div class="title">
            <span
                class="d-inline btn btn-primary bg-gradient-peach text-red animate__animated animate__fadeInUp">PSMTI</span>
            <div class="py-2 branding text-dark text-lg sm-text-xl font-bold">
                <span class="d-block animate__animated animate__fadeInDown animate__faster">Perkumpulan</span>
                <span class="d-block animate__animated animate__fadeInDown animate__fast">Marga Lie</span>
                <span class="d-block animate__animated animate__fadeInDown">Pekanbaru</span>
            </div>
            <div class="py-5 animate__animated animate__fadeInUp">
                <p class="text-gray">Kami keluarga besar Marga Lie </p>
                <p class="text-gray">mengucapkan salam  sejahtera bagi kita semua.</p>
            </div>

            <div class="py-5 animate__animated animate__fadeInUp">
                <a href="#" class="btn btn-primary bg-gradient text-white btn-shadow">Lebih Lengkap</a>
            </div>
        </div>
    </div>
</section>

<!-- End Banner Area -->

<!-- Image-Slider Area -->
<section class=" text-center d-flex justify-center align-items-center">
    <div class="flexslider">
        <ul class="slides">
            @foreach ($slider as $item)
            <li>
                <img src="{{asset($item->path)}}"/>
                <p class="flex-caption">{{$item->description}}</p>
              </li>
            @endforeach
          {{-- <li>
            <img src="../assets/Slider/margalie1.jpeg" />
            <p class="flex-caption">Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77</p>
          </li>
          <li>
            <img src="../assets/Slider/margalie2.jpeg" />
            <p class="flex-caption">Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77</p>
          </li>
          <li>
            <img src="../assets/Slider/margalie3.jpeg" />
            <p class="flex-caption">Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77</p>
          </li>
          <li>
            <img src="../assets/Slider/margalie4.jpeg" />
            <p class="flex-caption">Acara Marga Lie Bersama dalam merayakan HUT-RI ke-77</p>
          </li> --}}
        </ul>
      </div>
</section>

<!-- End Image-Slider Area -->

<!-- Agency Area -->
<section class="agency-area mt-5">
    <div class="container-mx-auto text-center font-poppins">
        <span class="text-red">Join Us</span>
        <div class="area-title">
            <h1 class="text-lg text-dark">
                Acara terakhir kami
            </h1>
        </div>
<!-- End Agency Area -->

<!-- digital life area -->
<section class="container mx-auto flex justify-center mt-2">
    <iframe src="https://www.youtube.com/embed/aleIj4vKU0c" width="853" height="480" frameborder="0"></iframe>
</section>
<!-- end digital life area -->

<!-- Counting area -->
<section class="container mx-auto counting-area">
    <div class="grid cols-1 lg-cols-2">
        <div class="grid-one text-center md-text-left">
            <span class="d-inline btn btn-primary bg-gradient-peach text-red">Our Family</span>
            <div class="font-poppins">
                <h1 class="text-lg text-dark py-5 mx p-2">
                    Keluarga besar kami<br>
                </h1>

                <p class="text-gray mx-auto mdmx-initial">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit vel, est animi rem aperiam
                    minima ullam unde voluptatem consequuntur repellat nesciunt quia quos velit suscipit, labore
                    distinctio eos maxime facilis repellendus id, molestiae ex iste laborum voluptatibus. Illo,
                    dolor maiores.
                </p>
            </div>
        </div>

        <div class="grid-two">
            <div class="count-box">
                <div class="grid lg-cols-2 btn-shadow font-poppins">
                    <div class="item1 text-center">
                        <h1 class="text-dark text-xl">{{$count}}</h1>
                        <span class="text-gray">Anggota</span>
                    </div>
                    <div class="item2 text-center">
                        <h1 class="text-dark text-xl">30+</h1>
                        <span class="text-gray">Acara Tahun ini</span>
                    </div>
                    <div class="item3 text-center">
                        <h1 class="text-dark text-xl">Ribuan</h1>
                        <span class="text-gray">Keluarga Terbantu</span>
                    </div>
                    <div class="item4 text-center">
                        <h1 class="text-dark text-xl">∞</h1>
                        <span class="text-gray">Semangat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end counting area -->

<!-- Card Area -->
<section class="container mx-auto card-area py-10">
    <div class="container mb-5">
        <h1 class="text-lg text-dark">Misi Kami</h1>
    </div>
    <div class="grid cols-1 lg-cols-3 font-poppins">
        <div class="bg-gradient-peach">
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-app-indicator"></i></span>
                <h2 class="text-dark">Misi Kesehatan</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
        <div class="bg-gradient-blue" >
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-lightbulb"></i></span>
                <h2 class="text-dark">Misi Kesejahteraan</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
        <div class="bg-gradient-red">
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-phone"></i></span>
                <h2 class="text-dark">Misi Pendidikan</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
        <div class="bg-gradient-yellow">
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-apple"></i></span>
                <h2 class="text-dark">Branding</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
        <div class="bg-gradient-purple">
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-chevron-bar-expand"></i></span>
                <h2 class="text-dark">Experiance Design</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
        <div class="bg-gradient-yellow">
            <div class="card px-10 py-10">
                <span class="d-block text-red text-xl"><i class="bi bi-card-text"></i></span>
                <h2 class="text-dark">Mobile App</h2>
                <p class="py-5 text-gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                    quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                    inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                    eligendi quae? Illo beatae adipisci distinctio.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end Card Area -->

<!-- Recent work area -->
<section class="container mx-auto py-10 recent-work-area">
    <div class="title">
        <span class="d-inline btn btn-primary bg-gradient-peach text-red">Galeri</span>
        <div class="font-poppins">
            <h1 class="text-lg text-dark py-5">
                Galeri Kami
            </h1>
        </div>

        {{-- Building Block --}}
        {{-- <div class="flex-item animate__animated animate__fadeInUp">
            <img src="" alt="" class="">
            <h3 class="text-dark">Pak Kamin</h3>
            <span class="text-gray">Branding</span>
        </div> --}}


        <div class="images-flex font-poppins">
            @foreach ($gallery as $image)
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src={{$image->imagepath}} alt="img1" class="w-100">
                <h3 class="text-dark">{{$image->title}}</h3>
                <span class="text-gray">{{$image->description}}</span>
            </div>  
            @endforeach
            {{-- <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img1.png" alt="img1" class="w-100">
                <h3 class="text-dark">Pak Kamin</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img2.png" alt="img1" class="w-100">
                <h3 class="text-dark">Apple iPhone</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img3.png" alt="img1" class="w-100">
                <h3 class="text-dark">Yoga</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img4.png" alt="img1" class="w-100">
                <h3 class="text-dark">Recent News</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img5.png" alt="img1" class="w-100">
                <h3 class="text-dark">New Apps</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img9.png" alt="img1" class="w-100">
                <h3 class="text-dark">Desktop</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img6.png" alt="img1" class="w-100">
                <h3 class="text-dark">iPhone 13pro</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img7.png" alt="img1" class="w-100">
                <h3 class="text-dark">Share Market</h3>
                <span class="text-gray">Branding</span>
            </div>
            <div class="flex-item animate__animated animate__fadeInUp">
                <img src="../assets/work/img8.png" alt="img1" class="w-100">
                <h3 class="text-dark">Desktop</h3>
                <span class="text-gray">Branding</span>
            </div> --}}
        </div>
    </div>
</section>
            
         
<!-- end Recent work area -->

<!-- ready area -->
{{-- <section class="ready-area container mx-auto py-5 animate__animated animate__zoomIn">
    <div class="flex flex-wrap font-poppins btn-shadow py-10 sm-px-10">
        <div class="w-50">
            <h1 class="text-lg sm-text-xl text-dark">Ready to get started?</h1>
            <p class="text-gray">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos distinctio eligendi
                dolorem similique quam facilis voluptate, aspernatur sint quas iure voluptates ea est porro amet
                eos, assumenda atque magnam. Nulla?
            </p>
        </div>
        <div class="cols py-5">
            <a href="#" class="btn-shadow text-white btn btn-primary d-block text-center bg-gradient">
                <span class="text-uppercase text-sm">Get Started</span>
            </a>
        </div>
    </div>
</section> --}}
<!-- end ready area -->

@endsection