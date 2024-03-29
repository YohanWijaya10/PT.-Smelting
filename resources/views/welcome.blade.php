<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PT Smelting</title>
   
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
         *{
            font-family: "Raleway", sans-serif;
        }
    </style>
    <style>
       
        .navbar-nav .dropdown-menu {
            background-color: #fff;
            
        }

        .navbar-nav .dropdown-item {
            color: #333;
            
        }

        .navbar-nav .dropdown-item:hover,
        .navbar-nav .dropdown-item:focus {
            background-color: #f8f9fa;
        }
    </style>
    <style>
        .navbar-nav .dropdown-menu {
            background-color: #fff;
            
        }

        .navbar-nav .dropdown-item {
            color: #333;
            
        }

        .navbar-nav .dropdown-item:hover,
        .navbar-nav .dropdown-item:focus {
            background-color: #f8f9fa;
        }
    </style>
</head>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<body>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top navbar-scrolled ">
        <div class="container">
            <a class="navbar-brand" href="/"><img class="logo" src="img/logosmelting.png" width="70"
                    height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown  mx-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/aboutus">Profile</a></li>
                            <li><a class="dropdown-item" href="/managementsystem">Management System</a></li>
                            <li><a class="dropdown-item" href="/award&sertification">Award & Sertification</a></li>
                            <li><a class="dropdown-item" href="/jobopportunity">Job Opportunity</a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown  mx-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Process
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/simplifieddiagram">Simplified Diagram</a></li>
                            <li><a class="dropdown-item" href="/rawmaterial">rawmaterial</a></li>
                            <li><a class="dropdown-item" href="/process">smelter</a></li>
                            <li><a class="dropdown-item" href="/refinery">Refinery</a></li>
                            <li><a class="dropdown-item" href="/acidplant">Acid Plant & WWTP</a></li>
                            <li><a class="dropdown-item" href="/supportfacility">Support Facility</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" href="/product">Product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" href="/environmental">Environmental</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" href="/csr">CSR Activity</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" href="/news">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light" href="#">Sitemap</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light fw-lighter" href="/">🇮🇩</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light fw-lighter" href="/en">🇬🇧</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="Countainer1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="  d-block w-100   " 
                    controls = “controls”
                    controls preload = “auto” 
                    autoplay = “autoplay” 
                    loop muted playsinline >
                        <source src="img/mainvid.mp4" type="video/mp4">
                    </video>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="bg ProfileSection py-2  ">
        <div class="container">
            <div class="row g-1 m-lg-3 g-md-5 m-1 justify-content-between   ">
                <div class="col-12 col-lg-6">
                    <video class="align-items-center w-100 rounded reveal" controls muted id="vid" loop>
                        <source src="img/ptsprofile.mp4" type="video/mp4">
                    </video>
                    
                    <script>
                        var video = document.getElementById('vid');
                    
                        // Play the video after the page has loaded
                        window.onload = function() {
                            video.play();
                        };
                    </script>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-between ">
                    <div>
                        <h2 class="fw-bolder ProfileTitle reveal">PT Smelting : <span class="fw-light">Profile</span>
                        </h2>

                        <p class="reveal">PT Smelting adalah pabrik peleburan dan pabrik pengilangan tembaga pertama di Indonesia. PT Smelting menggunakan teknologi Mitsubishi dalam proses peleburan tembaga dan teknologi ISA dalam proses penyulingan tembaga. Proses Mitsubishi merupakan proses peleburan dan konversi yang kontinu, ramah lingkungan, dan ekonomis.</p>
                    </div>
                    <div class="d-flex justify-content-end reveal">
                        <button class="btn btn-success btnProfile"> <a class="text-white"
                                style="text-decoration:none" href="aboutus">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 pt-5  ">
        <div class="row p-1  justify-content-around">
            <div class=" col-12 col-lg-4 reveal   " onclick="pindahKeBerita2()">
                <div class=" row ">
                    <div class="card mb-3">
                        <img class="card-img-top" src="img/tonggak.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tonggak Bersejarah PT Smelting</h5>
                            <p class="card-text">Panas matahari yang menyengat tak menghalangi Presiden Joko Widodo
                                (Jokowi) dan sejumlah menteri mengagumi smelter tembaga PT Smelting (PTS) di Gresik.
                            </p>
                            <p class="card-text"><small class="text-muted">2 February 2024</small></p>
                        </div>
                    </div>

                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="row">
                    <h2 class="fw-bolder NewsTitle reveal">Smelting <span class="fw-light">News</span></h2>
                </div>
                <div class="row d-flex p-2  reveal childnews" onclick="pindahKeBerita1()">
                    <div class="d-flex flex-row ">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center ms-2 p-2 text-center date rounded">
                            <span class="fw-bolder">17</span>
                            <span class="fw-bold">Nov</span>
                        </div>
                        <div class="d-flex flex-column ms-2 ">
                            <span class="fw-bold">PT Smelting Raih PROPER Hijau Kembali</span>
                            <span class="text-black-50">PT Smelting (PTS) kembali meraih PROPER Hijau di tahun 2023...
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row  p-2 reveal childnews" onclick="pindahKeBerita2()">
                    <div class="d-flex flex-row ">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center ms-2 p-2 text-center date rounded">
                            <span class="fw-bolder">30</span>
                            <span class="fw-bold">Dec</span>
                        </div>
                        <div class="d-flex flex-column ms-2 ">
                            <span class="fw-bold">Tonggak Bersejarah PT Smelting</span>
                            <span class="text-black-50 ">Panas matahari yang menyengat tak menghalangi Presiden Joko
                                Widodo ...
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row  p-2  reveal childnews" onclick="pindahKeBerita3()">
                    <div class="d-flex flex-row ">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center ms-2 p-2 text-center date rounded">
                            <span class="fw-bolder">1</span>
                            <span class="fw-bold">Jan</span>
                        </div>
                        <div class="d-flex flex-column ms-2 ">
                            <span class="fw-bold">Klub Baru untuk Para Pelari</span>
                            <span class="text-black-50">Satu lagi klub hobi terbentuk di lingkungan PT Smelting
                                (PTS)...
                            </span>
                        </div>
                    </div>
                </div>

                <div class="  d-flex justify-content-end fw-bold" onclick="news()">
                    <a style="text-decoration:none">
                        <p class="LinkNews reveal">See More...</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 pt-5 ">
        <div class="row  justify-content-between">
            <div class="col-12 col-lg-6 reveal">
                <div class=" ImgSocialMedia">
                    <img src="/img/SocialMedia1.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4 reveal">
                <h2 class="fw-bold TitleSocialMedia">Our <span class="fw-lighter">Social Media</span></h2>
                <div class="d-flex flex-row  align-items-center " onclick="pindahKeInstagram()">
                    <div
                        class=" LogoInstagram d-flex flex-column justify-content-center align-items-center ms-2 p-2 text-center rounded">
                        <span><img src="img/instagram.png" alt=""></span>
                    </div>
                    <div class="d-flex flex-column ms-2 ">
                        <span>
                            <h4>@SmeltingPeduli</h4>
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-row  align-items-center reveal" onclick="pindahKeYouTube()">
                    <div
                        class=" LogoInstagram d-flex flex-column justify-content-center align-items-center ms-2 p-2 text-center rounded">
                        <span><img src="img/Youtube.png" alt=""></span>
                    </div>
                    <div class="d-flex flex-column ms-2 ">
                        <span>
                            <h4>Smelting Magazine</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-lg-6 reveal">
                <h2 class="fw-bold TitleSocialMedia">Smelting <span class="fw-lighter">Media</span></h2>
            </div>
        </div>
        <div class="row m-2 d-flex align-items-center justify-content-center MagazineParent reveal ">
            <div class="col-4 col-md-3 magazine m-1 m-md-0 reveal">
                <img src="img/magazine1.png" alt="">
            </div>
            <div class="col-4 col-md-3 magazine m-1 m-md-0 reveal ">
                <img src="img/Magazine2.png" alt="">
            </div>
            <div class="col-4 col-md-3 magazine m-1 m-md-0 reveal">
                <img src="img/Magazine3.png" alt="">
            </div>
            <div class="col-4 col-md-3 magazine m-1 m-md-0 reveal">
                <img src="img/Magazine4.png" alt="">
            </div>

        </div>
        <div class="col d-flex justify-content-end m-4 m-md-5 " onclick="gallery()">
            <button class="btn btn-success btnProfile">Read More</button>
        </div>
    </div>
    <div class="container footer footerpad mt-5 ">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-12 imgfooter m-2">
                <div class="col ms-2 p-2 ">
                    <img src="img/footerlogo.png" alt="Footer Logo">
                </div>
            </div>
            <div class="col-5 col-md-3 d-flex justify-content-center ">
                <div class="row footer">
                    <h5 class="footer">Main Office & Plant</h5>
                    <p class="footer">PO BOX 555</p>
                    <p class="footer">Roomo Village</p>
                    <p class="footer">Manyar District</p>
                    <p class="footer">Gresik - East Java 61151 Indonesia</p>
                    <p class="footer">Phone: +62-31-397-6450</p>
                    <p class="footer">Fax: +62-31-397-6455</p>
                </div>
            </div>
            <div class="col-5 col-md-3 d-flex justify-content-center">
                <div class="row footer">
                    <h5 class="footer">Jakarta Office</h5>
                    <p class="footer">Capital Place Office Tower, 3rd Floor, Unit C</p>
                    <p class="footer">Jl. Jend. Gatot Subroto Kav.18</p>
                    <p class="footer">Jakarta 12710</p>
                    <p class="footer">Phone: +62-21-2793 9997, 2793 9373</p>
                    <p class="footer">Fax: +62-21-2793 9292</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
    <script>
        function pindahKeInstagram() {
            // Ganti URL dengan link Instagram yang sesuai
            window.location.href = "https://www.instagram.com/SmeltingPeduli/";
        }

        function pindahKeYouTube() {
            // Ganti URL dengan link YouTube yang sesuai
            window.location.href = "https://www.youtube.com/@SmeltingMagazine";
        }
    </script>


    <script>
        function pindahKeBerita1() {

            window.location.href = "{{ url('/berita1') }}";
        }

        function pindahKeBerita2() {

            window.location.href = "{{ url('/berita2') }}";
        }

        function pindahKeBerita3() {

            window.location.href = "{{ url('/berita3') }}";
        }

        function pindahKeBerita4() {

            window.location.href = "{{ url('/berita4') }}";
        }

        function news() {

            window.location.href = "{{ url('/news') }}";
        }

        function gallery() {

            window.location.href = "{{ url('/gallery') }}";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
    </script>
    <script>
        const navEL = document.querySelector('.navbar');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 56) {
                navEL.classList.add('navbar-scrolled');
                navLinks.forEach(link => link.classList.add('text-dark'));
            } else {
                navEL.classList.remove('navbar-scrolled');
                navLinks.forEach(link => link.classList.remove('text-dark'));
            }
        });
    </script>

    <script>
        document.getElementById('vid').play();
    </script>


    <script>
        AOS.init();
        AOS.refreshHard();
    </script>
</body>

</html>
