<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
         *{
            font-family: "Raleway", sans-serif;
        }
    </style>
    <style>
        .navbar-scrolled {
            background-color: #0f6456;

            transition: ease-in-out 0.5s;

        }

        .navbar-scrolled .navbar-nav .nav-link {
            color: white !important;
            transition: ease-in-out 0.5s;

        }

        


        /* *{
    border: red 1px solid;
} */
        .reveal {
            position: relative;
            transform: translateY(10vmin);
            opacity: 0;
            transition: 1s all ease;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }

        .imgnews {
            max-width: 100%;
        }

        .imgnews img {
            max-width: 100%;
        }

        .profileTitle {
            color: #660100;
        }

        .btngreen {
            color: #0f6456;
        }

        .date {
            background-color: #0f6456;
        }

        .imgmagazine {
            max-width: 100%;
        }

        .imgmagazine img {
            max-width: 100%;
        }

        .footer {
            max-width: 100%;
            margin: 0%;
            padding: 0%;
            background-color: #0F6456;
            overflow: hidden;
        }


        .footer img {
            max-width: 100%;
        }

        .footerpad {
            padding-top: 2%;
            padding-bottom: 2%;
            color: white;
        }

        .backbtn {
            color: #0F6456;
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

<body>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top navbar-scrolled ">
        <div class="container">
            <a class="navbar-brand" href="/en"><img class="logo" src="img/logosmelting.png" width="70"
                    height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown  mx-3">
                        <a class="nav-link dropdown-toggle text-white fw-lighter" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/aboutus-en">Profile</a></li>
                            <li><a class="dropdown-item" href="/managementsystem-en">Management System</a></li>
                            <li><a class="dropdown-item" href="/award&sertification-en">Award & Sertification</a></li>
                            <li><a class="dropdown-item" href="/jobopportunity-en">Job Opportunity</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown  mx-3 text-light">
                        <a class="nav-link dropdown-toggle text-white fw-lighter" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Process
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/simplifieddiagram-en">Simplified Diagram</a></li>
                            <li><a class="dropdown-item" href="/rawmaterial-en">rawmaterial</a></li>
                            <li><a class="dropdown-item" href="/process-en">smelter</a></li>
                            <li><a class="dropdown-item" href="/refinery-en">Refinery</a></li>
                            <li><a class="dropdown-item" href="/acidplant-en">Acid Plant & WWTP</a></li>
                            <li><a class="dropdown-item" href="/supportfacility-en">Support Facility</a></li>

                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="/product-en">Product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="/environmental-en">Environmental</a>
                    </li>
                    <li class="nav-item dropdown  mx-3">
                        <a class="nav-link dropdown-toggle text-white fw-lighter" href="/csr-en" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CSR Activity
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/csr-en">Community Development</a></li>
                            <li><a class="dropdown-item" href="/education-en">Education</a></li>
                            <li><a class="dropdown-item" href="/health-en">Healty</a></li>
                            <li><a class="dropdown-item" href="/socialeconomy-en">Social Economy</a></li>
                            <li><a class="dropdown-item" href="/environmentcsr-en">Environment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bolder" href="/news-en">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-lighter" href="sitemap-en">Sitemap</a>
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
                    <img class="d-block w-100" src="img/AboutUs.png" alt="First slide">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="container m-3 mt-5">
            <div class="row m-md-5">
                <h2 class="fw-bolder profileTitle">News<span class="fw-light"> From Smelting: Publications</span></h2>
            </div>
        </div>
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-md-6 col-3 mt-0 Submenu fw-bolder"><a class="text-black" style="text-decoration:none" href="/news">Publications</a></div>
                <div class="col-lg-2 col-md-6 col-5 mt-0 Submenu fw-lighter"><a class="text-black-50" style="text-decoration:none" href="/pressrelease">Press Releases</a></div>
            </div>
        </div>
    
        <div class="container m-3 mt-5">
            <div class="row justify-content-center" onclick="pindahKeBerita1()">
                <div class="col-md-3 col-auto imgnews">
                    <img src="img/beritaProperHijau.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="m-0 p-1 date text-white rounded">November 17, 2023</h6>
                        </div>
                        <h4 class="mt">PT Smelting Achieves Green PROPER Again</h4>
                        <p class="text-black-50">PT Smelting (PTS) once again achieved the Green PROPER in 2023 at the Environmental Performance Rating Program (PROPER) awards organized by the Ministry of Environment and Forestry (KLHK).</p>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto col-md-2">
                            <button type="button" class="btn align-self-end btngreen"><a class="btngreen" style="text-decoration:none" href="/news1">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4" onclick="pindahKeBerita2()">
                <div class="col-md-3 imgnews">
                    <img src="img/Tonggak.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="m-0 p-1 date text-white rounded">December 25, 2023</h6>
                        </div>
                        <h4>Historical Milestone for PT Smelting</h4>
                        <p class="text-black-50">The scorching sun did not deter President Joko Widodo (Jokowi) and several ministers from admiring the copper smelter of PT Smelting (PTS) in Gresik. The VVIP guests appeared serious listening to the explanation about the operational aspects of the smelter from PTS President Director Hideya Sato (Sato).</p>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto col-md-2">
                            <button type="button" class="btn align-self-end btngreen"><a class="btngreen" style="text-decoration:none" href="/news2">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4" onclick="pindahKeBerita3()">
                <div class="col-md-3 imgnews">
                    <img src="img/runner.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="m-0 p-1 date text-white rounded">January 1, 2024</h6>
                        </div>
                        <h4>New Club for Runners</h4>
                        <p class="text-black-50">Another hobby club has been formed within PT Smelting (PTS). Its name is the Smelting Running Club. True to its name, this is a club for fans of running. When was this club formed? Who are its members? When is training? How can one become a member of the club? What are the benefits? Here's an excerpt from an interview with Smelting Magazine about it.</p>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto col-md-2">
                            <button type="button" class="btn align-self-end btngreen"><a class="btngreen" style="text-decoration:none" href="/news3">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4" onclick="pindahKeBerita4()">
                <div class="col-md-3 imgnews">
                    <img src="img/hiv.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="m-0 p-1 date text-white rounded">February 3, 2024</h6>
                        </div>
                        <h4>HIV/AIDS through Promotive and Preventive Measures</h4>
                        <p class="text-black-50">PT Smelting (PTS) continues to campaign for a healthy lifestyle among all its employees. At the end of 2023, PTS once again organized promotive and preventive activities to prevent the spread of HIV/AIDS. The agenda adopted the theme "Let Communities Lead".</p>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto col-md-2">
                            <button type="button" class="btn align-self-end btngreen"><a class="btngreen" style="text-decoration:none" href="/news4">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="container mt-5">
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item "><a class="page-link btngreen " href="#">1</a></li>
                        <li class="page-item"><a class="page-link  btngreen" href="#">2</a></li>
                        <li class="page-item"><a class="page-link  btngreen" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link btngreen" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <br>

        <div class="container m-3 mt-5">
            <h2 class="fw-bolder profileTitle ">Read<span class="fw-light"> Magazine</span>
            </h2>
        </div>

        <div class="container mt-3 m-3 ">
            <div class="row">
                <div class="row justify-content-center ">

                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center ">
                        <img src="/img/magazine1.png" alt="">
                    </div>
                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center">
                        <img src="/img/Magazine2.png" alt="">
                    </div>
                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center">
                        <img src="/img/Magazine3.png" alt="">
                    </div>
                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center">
                        <img src="/img/Magazine4.png" alt="">
                    </div>
                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center">
                        <img src="/img/Magazine5.png" alt="">
                    </div>
                    <div class="col-5 col-md-2 mt-3 imgmagazine justify-content-center">
                        <img src="/img/Magazine6.png" alt="">
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-auto ">
                        <button type="button" class="btn  align-self-end btngreen" onclick="gallery()">Read
                            More...</button>
                    </div>
                </div>
            </div>
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
    <script>
        function pindahKeBerita1() {

            window.location.href = "{{ url('/berita1-en') }}";
        }

        function pindahKeBerita2() {

            window.location.href = "{{ url('/berita2-en') }}";
        }

        function pindahKeBerita3() {

            window.location.href = "{{ url('/berita3-en') }}";
        }

        function pindahKeBerita4() {

            window.location.href = "{{ url('/berita4-en') }}";
        }

        function news() {

            window.location.href = "{{ url('/news-en') }}";
        }

        function gallery() {

            window.location.href = "{{ url('/gallery-en') }}";
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
