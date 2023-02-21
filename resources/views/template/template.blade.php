<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkumpulan Marga Lie Pekanbaru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../library/particle.css">
    <link rel="shortcut icon" href="../assets/MargaLieLogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../OwlCarousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="../OwlCarousel/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
    <!-- CSS -->
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <!-- Header -->
    <header id="header" class="container-fluid">
        <nav id="headercontacts" class="mx-3 bg-gradient-indigo flex justify-content-between p-2">
            
            <a href="https://www.youtube.com/channel/UCFfjnEwfvTWRokVuJi_8vqg" target="_blank" class="flex align-items-center ms-1 ">
                <span class="text-gray c-white" id="logo-yt"> <i class="fa-brands fa-youtube fa-lg"></i></span>
            </a>

            <ul class="navbar-nav ml-auto flex justify-content-end">
                <li class="nav-item">
                    <a class="nav-link " href="#"><span class="d-block"> <i class="fa-solid fa-phone"></i> +62 877 6405 3444</span></a>
                </li>
                <li class="nav-item">
                <a href="mailto:margalieepekanbaru@gmail.com" style="color: white"> <i class="fa-solid fa-at"></i> margalieepekanbaru@gmail.com</a>
                </li>
            </ul>
        </nav>
        <nav id="nav" class="flex font-poppins bg-gradient">

            <div class="nav-brand">
                <a class="navbar-brand" href="/">
                    <img src="{{url('./assets/MargaLieLogo.png')}}" width="50px" height="50px" alt="">
                </a>
            </div>

            <div class="toggle-btn">
                <button class="btn">
                    <i class="bi bi-filter-right"></i>
                </button>
            </div>

            <div class="collapse flex-grow flex align-items-center">
                <ul class="flex">
                    <li>
                        <a href="/" class="link-menu">Home</a>
                    </li>
                    <li>
                        <a href="/aboutus" class="link-menu">Tentang kami</a>
                    </li>
                    <li>
                        <a href="/berita" class="link-menu">Berita</a>
                    </li>
                    <li>
                        <a href="/organisation" class="link-menu">Struktur Organisasi</a>
                    </li>
                    <li>
                        <a href="/video" class="link-menu">Video</a>
                    </li>
                </ul>
            </div>

            <div class="flex align-items-center">
                <ul class="flex">
                    @guest    
                    <a class="btn btn-primary btn-shadow btn-border text-white text-uppercase ms-1" href="/login">Login</a>
                    @endguest
                    @auth
                    <a class="btn btn-primary btn-shadow btn-border text-white text-uppercase ms-1" href="/dashboard">Back to Dash</a>
                    @endauth
                </ul>
            </div>

        </nav>
    </header>

    <main id="site-main">
    @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" style="background-color: #152C33">
        <section class="container mx-auto py-10">
            <div class="grid md-cols-2 lg-cols-3 font-poppins">
                <div class="text-gray text-center md-text-left">
                    <h3 class="text-light text-lg">Alamat</h3>
                    <div class="py-5">
                        <span class="d-block mb-1">
                            <i class="fa-solid fa-location-dot"></i>
                            Kompleks Central Niaga Kelurahan, Jl. Soekarno Hatta, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau
                        </span>
                        <span class="d-block mt-1"> <i class="fa-solid fa-phone"></i> +62 877 6405 3444</span>
                        <div class="text-red mt-1"> <i class="fa-solid fa-at"></i> <a href="mailto:margalieepekanbaru@gmail.com" style="color: red; font-size: 0.9em">margalieepekanbaru@gmail.com</a></div>
                    </div>
                </div>
                <div class="text-gray text-center md-text-left" style="overflow: hidden">
                    <h3 class="text-light text-lg">Lokasi Kantor Kami</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6483396584113!2d101.41748021470069!3d0.5288863996141415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5abedca2855dd%3A0x2c2848e1eed4eafa!2sKantor%20Perkumpulan%20Marga%20Lee%20Pekanbaru!5e0!3m2!1sen!2sid!4v1669081619717!5m2!1sen!2sid" width="400" height="300" style="border:0;" class="py-5" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="text-gray text-center md-text-left">
                    <h3 class="text-light text-lg">Media Social</h3>
                    <div class="py-5">
                        <a href="#" class="d-block">
                            <span class="text-gray" id="logo-yt"> <i class="fa-brands fa-youtube"></i>  Youtube</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyrights font-poppins">
                <p class="text-gray py-2 text-center">
                    Copyright © 2022. Marga Lie Pekanbaru. All rights reserved.
                </p>
            </div>

        </section>
    </footer>
    <!-- end footer -->




    <!-- JS -->
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
        integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js"
        integrity="sha512-coKEwkkVJR6lO1aL/rJeVFojNKG1DRNbAfuxcvFC98W9TYBO9TQIVFXiHBBx6dRL9+effSNEYIr/5vLe5HENVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/main.js"></script>
    <script src="../OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="../js/slideroption.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
</body>

</html>