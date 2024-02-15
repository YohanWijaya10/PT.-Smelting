<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="/css/AboutUs.css">

</head>

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
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bolder " href="/aboutus"> About Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="/">Process</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="#">Product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="#">Environmental & CSR Activity</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="/news">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="#">Sitemap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="Countainer1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/AboutUs.png" alt="First slide">
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-2 col-md-6 col-3 mt-5 Submenu fw-bolder"><a class="text-black"
                    style="text-decoration:none" href="/aboutus">Profile</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/managementsystem">Management System</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/award&sertification">Award & Certification</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/jobopportunity">Job Opportunity</a></div>
        </div>
    </div>


    <div class="bg ProfileSection py-2 mt-5  ">
        <div class="container">
            <div class="row g-1 m-lg-3 g-md-5 m-1 justify-content-between align-items-center  ">
                <div class="col-12 col-lg-6 imgprofile ">

                    <img src="img/AboutUsProfile.png" alt="">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-between align-items-center  ">
                    <div>
                        <div class="col-lg-9 profile m-3">
                            <h2 class="fw-bolder ProfileTitle ">PT. Smelting : <span class="fw-light">Pioneering
                                    Excellence in Copper Smelting and Refining in Indonesia</span>
                            </h2>
                        </div>
                        <button class=" btn btn-success btnProfile m-3 ">
                            <a class="text-white" style="text-decoration: none" href="/overview">Read More</a>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row journey mt-5 reveal ">
        <div class="row m-5 content">
            <div class="row mt-5">
                <h1 class="titleTimeline reveal"  >Perjalanan PT. Smelting</h1>
               
                <div class="row ">
                    <div class="col-6">
                        <h4 class=" subTitle reveal">PT Smelting mencapai sebuah milestone signifikan dengan berhasil
                            meningkatkan kapasitas produksi pabriknya, mencapai target produksi yang belum pernah tercapai
                            sebelumnya.</h4>
                    </div>
                    
                </div>
                
                <div class="row  mt-5 pt-5   " >
                    <div class="col"  >
                        <button class="btn btn-success btntimeline " onclick="timeline1()">Read More</button>
                    </div>
                    </div>
                    
            </div>

        </div>

    </div>

    {{-- <div class="row mt-5 timeline">
        <img class="desktop-image reveal" src="img/timelinenew.png" alt="">
        <img class="mobile-image reveal" src="img/mobile.png" alt="">
        <div class="row ContentTimeline m-1 mt-5 pt-5">
            <div class="row col-7 m-4 ">
                <h1 class="titleTimeline reveal">Perjalanan PT. Smelting</h1>
                <div class="row"></div>
                <h4 class="row-cols-3 subTitle reveal">PT Smelting mencapai sebuah milestone signifikan dengan berhasil meningkatkan kapasitas produksi pabriknya, mencapai target produksi yang belum pernah tercapai sebelumnya.</h4>
                <div class="row row-cols-lg-5 mt-5 pt-5 m-1 ">
                    <button class="btn btn-success btntimeline ">Read More</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class=" row coba">
        <img class="gambarcoba" src="img/timelinenew.png" alt="">
    </div> --}}



    <div class="container " >
        <div class="row mt-5 m-3">
            <div class="col-md">
                <h2 class="fw-bold TitleVM reveal">Our<span class="fw-lighter"> Vision & Mission</span></h2>
                <p class="mt-4 reveal">PT Smelting aims to contribute globally through sustainable copper smelting and
                    refining, ensuring
                    safe and environmentally friendly processes. The company prioritizes SCQDE values, adheres to
                    responsible sourcing control, and integrates various management systems for continual improvement in
                    safety, health, and overall operational performance.</p>
                <div class="col mt-5 pt-4 " onclick="visionmission()" >
                    <button class="btn btn-success btnvm reveal">Read More</button>
                </div>
            </div>
            <div class="col-md imagevm reveal">
                <img src="img/ImageVM.png" alt="">
            </div>
        </div>
    </div>

    <div class="gallery mt-5 reveal ">
        <div class="row ">
            <div class="col m-5">
                <h2 class="fw-bold titleTimeline reveal">Visual Journey: <span class="fw-lighter">PT Smelting Gallery
                        in the Commitment to Sustainable Copper</span>
                </h2>
                <div class="col-10 m-5 imggalery justify-content-center ">
                    <div class="row align-items-center ">
                        <div class="col-10 m-2 col-md-3 m-md-0">
                            <img src="img/newsdisplay.png" alt="">
                        </div>
                        <div class="col-10 m-2 col-md-3 m-md-0">
                            <img src="img/newsdisplay1.png" alt="">
                        </div>
                        <div class="col-10 m-2 col-md-3 m-md-0">
                            <img src="img/newsdisplay2.png" alt="">
                        </div>
                        <div class="col-10 m-2 col-md-3 m-md-0 d-flex justify-content-center">
                            <div class="row " onclick="gallery()">
                                <h5 class="">See More →</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container footer footerpad">
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

    <script>
       
        function visionmission() {
            
            window.location.href = "{{ url('/visionmission') }}";
        }
        function timeline1() {
            
            window.location.href = "{{ url('/timeline') }}";
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
                var elementVisible = 150;

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
</body>

</html>
