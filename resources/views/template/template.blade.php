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
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Header -->
    <header class="container-fluid">
        <nav id="nav" class="flex font-poppins">

            <div class="nav-brand">
                <a class="navbar-brand" href="#">
                    <img src="{{url('./assets/MargaLieLogo.png')}}" width="75px" height="75px" alt="">
                  </a>
            </div>

            <div class="toggle-btn">
                <button class="btn">
                    <i class="bi bi-filter-right"></i>
                </button>
            </div>

            <div class="collapse flex-grow">
                <ul class="flex">
                    <li>
                        <a href="#" class="link">Home</a>
                    </li>
                    <li>
                        <a href="#" class="link">Tentang kami</a>
                    </li>
                    <li>
                        <a href="#" class="link">Berita</a>
                    </li>
                    <li>
                        <a href="#" class="link">Event</a>
                    </li>
                    <li>
                        <a href="#" class="link">Kontak kami</a>
                    </li>
                </ul>
            </div>

            <div class="flex-initial">
                <ul class="flex">
                    <button class="btn btn-primary btn-shadow bg-gradient text-white text-uppercase">Sign in</button>
                    <button class="btn btn-primary btn-shadow bg-gradient text-white text-uppercase ms-1">Login</button>
                </ul>
            </div>

        </nav>
    </header>

    @yield('content')
    <!-- end Header -->


    <!-- Main Section -->
    {{-- <main id="site-main">

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
        <section class="banner-area font-poppins">
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
                        <p class="text-gray">We merge imagination and technology to help thousands of </p>
                        <p class="text-gray">brands grow in an age of digital transformation.</p>
                    </div>

                    <div class="py-5 animate__animated animate__fadeInUp">
                        <a href="#" class="btn btn-primary bg-gradient text-white btn-shadow">Work Together</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Banner Area -->

        <!-- Image-Slider Area -->

        <div class="slider-wrapper flex justify-center py-10">
            <div class="owl-carousel owl-theme">
                <div class="item"><h4>1</h4></div>
                <div class="item"><h4>2</h4></div>
                <div class="item"><h4>3</h4></div>
            </div>
        </div>
        
        <!-- End Image-Slider Area -->
        <!-- Agency Area -->
        <section class="agency-area">
            <div class="container-mx-auto text-center font-poppins">
                <span class="text-red">Join Us</span>
                <div class="area-title">
                    <h1 class="text-lg text-dark">
                        Profil Kami
                    </h1>
                </div>

                <div class="grid cols-1 lg-cols-3 py-10">
                    <div class="grid-item px-5">
                        <div class="text-center text-2xl text-red">
                            <i class="bi bi-bricks"></i>
                        </div>
                        <div class="text-center">
                            <h4 class="text-md py-2">Grow Your Business</h4>
                            <p class="text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eius
                                odio mollitia dolore ad?</p>
                        </div>
                    </div>
                    <div class="grid-item px-5">
                        <div class="text-center text-2xl text-red">
                            <i class="bi bi-megaphone "></i>
                        </div>
                        <div class="text-center">
                            <h4 class="text-md py-2">Digital Marketing</h4>
                            <p class="text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eius
                                odio mollitia dolore ad?</p>
                        </div>
                    </div>
                    <div class="grid-item px-5">
                        <div class="text-center text-2xl text-red">
                            <i class="bi bi-mouse "></i>
                        </div>
                        <div class="text-center">
                            <h4 class="text-md py-2">Search Engine Optimization</h4>
                            <p class="text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eius
                                odio mollitia dolore ad?</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Agency Area -->

        <!-- digital life area -->
        <section class="container mx-auto life-area">
            <div class="grid cols-1 lg-cols-2 text-center md-text-left">
                <div class="grid-images">
                    <div data-rellax-speed="2" class="item-one rellax"></div>
                    <div data-rellax-speed="-1" class="item-two rellax"></div>
                    <div data-rellax-speed="1" class="item-three rellax"></div>
                </div>
                <div class="py-10">
                    <span class="d-inline btn btn-primary bg-gradient-peach text-red">Marga Lie Pekanbaru</span>
                    <div class="font-poppins">
                        <h1 class="text-lg text-dark py-5">
                            Siapakah<br>
                            Kami?
                        </h1>

                        <p class="py-5 text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia
                            repudiandae maxime reiciendis, explicabo ullam similique?</p>

                        <p class="text-gray py-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, voluptas! Fugit, eius
                            molestiae. Atque voluptatum numquam sit doloremque veritatis voluptates sequi rerum
                            voluptatibus nihil, molestiae obcaecati nemo unde consectetur. Doloribus harum tempore
                            dolore saepe amet numquam placeat assumenda laborum reprehenderit, quae vero cupiditate
                            libero id distinctio ut modi neque tenetur!
                        </p>

                        <div class="py-5">
                            <a href="#" class="btn btn-primary bg-gradient btn-shadow text-white">More about us</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end digital life area -->

        <!-- Counting area -->
        <section class="container mx-auto counting-area">
            <div class="grid cols-1 lg-cols-2">
                <div class="grid-one text-center md-text-left">
                    <span class="d-inline btn btn-primary bg-gradient-peach text-red">digital experiance</span>
                    <div class="font-poppins">
                        <h1 class="text-lg text-dark py-5">
                            The hundred of<br>
                            completed works<br>
                            still counting
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
                                <h1 class="text-dark text-xl">21+</h1>
                                <span class="text-gray">Total Top Services</span>
                            </div>
                            <div class="item2 text-center">
                                <h1 class="text-dark text-xl">29+</h1>
                                <span class="text-gray">Countries</span>
                            </div>
                            <div class="item3 text-center">
                                <h1 class="text-dark text-xl">21+</h1>
                                <span class="text-gray">Positive Feedback</span>
                            </div>
                            <div class="item4 text-center">
                                <h1 class="text-dark text-xl">3,798</h1>
                                <span class="text-gray">Usual Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end counting area -->

        <!-- Card Area -->
        <section class="container mx-auto card-area py-10">
            <div class="grid cols-1 lg-cols-3 font-poppins">
                <div class="bg-gradient-peach rellax" data-rellax-speed="2">
                    <div class="card px-10 py-10">
                        <span class="d-block text-red text-xl"><i class="bi bi-app-indicator"></i></span>
                        <h2 class="text-dark">Mobile App</h2>
                        <p class="py-5 text-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                            quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                            inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                            eligendi quae? Illo beatae adipisci distinctio.
                        </p>
                    </div>
                </div>
                <div class="bg-gradient-blue rellax" data-rellax-speed="-1">
                    <div class="card px-10 py-10">
                        <span class="d-block text-red text-xl"><i class="bi bi-lightbulb"></i></span>
                        <h2 class="text-dark">Strategy</h2>
                        <p class="py-5 text-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                            quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                            inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                            eligendi quae? Illo beatae adipisci distinctio.
                        </p>
                    </div>
                </div>
                <div class="bg-gradient-red rellax" data-rellax-speed="2">
                    <div class="card px-10 py-10">
                        <span class="d-block text-red text-xl"><i class="bi bi-phone"></i></span>
                        <h2 class="text-dark">E-Commerce</h2>
                        <p class="py-5 text-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, illo aliquid reprehenderit
                            quo impedit adipisci accusantium neque! Doloribus modi reiciendis, nesciunt suscipit
                            inventore, mollitia numquam animi velit labore cum quibusdam ipsa porro! Cumque dolorum
                            eligendi quae? Illo beatae adipisci distinctio.
                        </p>
                    </div>
                </div>
                <div class="bg-gradient-yellow rellax" data-rellax-speed="2">
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
                <div class="bg-gradient-purple rellax" data-rellax-speed="1">
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
                <div class="bg-gradient-yellow rellax" data-rellax-speed="2">
                    <div class="card px-10 py-10">
                        <span class="d-block text-red text-xl"><i class="bi bi-chevron-bar-building"></i></span>
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
                <span class="d-inline btn btn-primary bg-gradient-peach text-red">digital experiance</span>
                <div class="font-poppins">
                    <h1 class="text-lg text-dark py-5">
                        Some recent work <br>
                        we really proud of<br></h1>
                    </h1>
                </div>

                <div class="images-flex font-poppins">
                    <div class="flex-item animate__animated animate__fadeInUp">
                        <img src="../assets/work/img1.png" alt="img1" class="w-100">
                        <h3 class="text-dark">Photo Retouching</h3>
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
                    </div>
                    <div class="flex-item animate__animated animate__fadeInUp">
                        <img src="../assets/work/img9.png" alt="img1" class="w-100">
                        <h3 class="text-dark">Desktop</h3>
                        <span class="text-gray">Branding</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Recent work area -->

        <!-- article area -->
        <section class="article-area container mx-auto py-10">
            <div class="area-title text-center font-poppins ">
                <span class="text-red">Our Recent Articles</span>
                <h1 class="text-lg text-dark">Articles daily updated</h1>
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
                <div class="card animate__animated animate__fadeInLeft">
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
                <div class="card animate__animated animate__fadeInLeft">
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
        <!-- end article area -->

        <!-- ready area -->
        <section class="ready-area container mx-auto py-5 animate__animated animate__zoomIn">
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
        </section>
        <!-- end ready area -->

    </main>
    <!-- end Main section --> --}}

    <!-- Footer -->
    <footer id="footer">
        <section class="container mx-auto py-10">
            <div class="grid md-cols-2 lg-cols-3 font-poppins">
                <div class="text-gray text-center md-text-left">
                    <h3 class="text-dark">Alamat</h3>
                    <div class="py-5">
                        <span class="d-block mb-1">
                            <i class="fa-solid fa-location-dot"></i>
                            Kompleks Central Niaga Kelurahan, Jl. Soekarno Hatta, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau
                        </span>
                        <span class="d-block mt-1"> <i class="fa-solid fa-phone"></i> +62 877 6405 3444</span>
                        <div class="text-red mt-1"> <i class="fa-solid fa-at"></i> <a href="mailto:margalieepekanbaru@gmail.com" style="color: red; font-size: 0.9em">margalieepekanbaru@gmail.com</a></div>
                    </div>
                </div>
                <div class="text-gray text-center md-text-left">
                    <h3 class="text-dark">About</h3>
                    <div class="py-5">
                        <a href="#" class="d-block">
                            <span class="text-gray">About us</span>
                        </a>
                        <a href="#" class="d-block">
                            <span class="text-gray">Blog</span>
                        </a>
                        <a href="#" class="d-block">
                            <span class="text-gray">Portfolio</span>
                        </a>
                        <a href="#" class="d-block">
                            <span class="text-gray">Carrers</span>
                        </a>
                        <a href="#" class="d-block">
                            <span class="text-gray">Patners</span>
                        </a>
                    </div>
                </div>
                <div class="text-gray text-center md-text-left">
                    <h3 class="text-dark">Media Social</h3>
                    <div class="py-5">
                        <a href="#" class="d-block">
                            <span class="text-gray"> <i class="fa-brands fa-youtube"></i>  Youtube</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyrights font-poppins">
                <p class="text-gray py-5 text-center">
                    Copyright © 2022. Marga Lie Pekanbaru. All rights reserved.
                </p>
            </div>

        </section>
    </footer>
    <!-- end footer -->




    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
        integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js"
        integrity="sha512-coKEwkkVJR6lO1aL/rJeVFojNKG1DRNbAfuxcvFC98W9TYBO9TQIVFXiHBBx6dRL9+effSNEYIr/5vLe5HENVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/main.js"></script>
    <script src="../OwlCarousel/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items:1,
                nav:false,
                dots:false,
                loop:true,
                autoplay:true,
                autoplayTimeout:3000,
                center:true,
                margin:10
            });
        });
    </script>
</body>

</html>