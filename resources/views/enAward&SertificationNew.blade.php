<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/coba.css">
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



.imgsertif {
    max-width: 100%;
}

.imgsertif img {
    max-width: 100%;
}


.title {
    color: #0f6456;
    font-weight: bold;
}

.heading {
    color: #660100;
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

        .navbar{
            
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
                        <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle text-white fw-ligter" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link text-light" href="/product-en">Product</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-ligter" href="/environmental-en">Environmental</a>
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
                        <a class="nav-link text-light fw-ligter" href="/news-en">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-ligter" href="#">Sitemap</a>
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
    <div class="container text-center">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-2 col-md-6 col-3 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/aboutus-en">Profile</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/managementsystem-en">Management System</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-bolder"><a class="text-black"
                    style="text-decoration:none" href="/award&sertification-en">Award & Certification</a></div>
            <div class="col-lg-2 col-md-6 col-5 mt-5 Submenu fw-lighter"><a class="text-black-50"
                    style="text-decoration:none" href="/jobopportunity-en">Job Opportunity</a></div>
        </div>
    </div>
    <div class="container mt-5 pt">
        <div class="row ">
            <h2 class="heading">PT Smelting:<span class="fw-lighter"> Smelting Management System</span></h2>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/ISO45001.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">ISO 45001</h4>
                            <p>PT Smelting has implemented Occupational Safety and Health according to ISO 45001:2018
                                in
                                the integrated management system.As the first copper smelter and refinery in Indonesia,
                                PT.
                                Smelting has a major role in creating a safe working environment through the process
                                improvement which is efficient, sound and environmentally friendly as a model for future
                                copper smelter.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/ISO14001.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">ISO 14001</h4>
                            <p>PT Smelting has a high and serious commitment to the environmental protection and
                                environmental management by always trying to be environmentally friendly company. As a
                                manifestation of this commitment is the implementation of Environmental Management
                                Systems (ISO 14001: 2015) in the integrated management system.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/ISO9001.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">ISO 9001</h4>
                            <p>ISO 9001 is well known as worldwide certification on quality management system (QMS). ISO
                                9001 defines the standards of a quality management system to guarantee that the
                                organization
                                can produce the product or service based on requirement defined. These defined
                                requirements
                                are specific customer requirements, in which the organization responsible to guarantee
                                the
                                quality of its product or the market demand as defined by company.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/smsi.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">Security Management System Implementation</h4>
                            <p>PT Smelting is determined as National Vital Object company (Obvitnas) based on decision
                                from
                                Industrial Ministry No. 466/M-IND/Kep/8/2014. Therefore, PT Smelting implements
                                security
                                management system based on Police Regulation No. 7/2019 and got its certification on
                                September 1, 2021 with gold level achievement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/proper.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">PROPER (Program of Company Performance Rating Assessment on
                                Environmental Management)</h4>
                            <p>PT Smelting is determined as National Vital Object company (Obvitnas) based on decision
                                from
                                Industrial Ministry No. 466/M-IND/Kep/8/2014. Therefore, PT Smelting implements
                                security
                                management system based on Police Regulation No. 7/2019 and got its certification on
                                September 1, 2021 with gold level achievement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/green.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">GREEN INDUSTRY</h4>
                            <p>The Green Industry Program is held by the Ministry of Industry which aims to continue to
                                encourage all manufacturing sectors in Indonesia in the application of green industry
                                principles in order to support the creation of environmentally friendly and competitive
                                industries on the global scene.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/5s.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold  title">5S</h4>
                            <p>5 S is one of the methods of determining an organization approach to to evaluate its
                                workplace organization capability & visual management standards. 5S engages people
                                through
                                the use of 'Standards' and ‘Discipline'. It is not just about housekeeping, but
                                concentrating on maintaining the standards & discipline to manage the organization - all
                                achieved by upholding & showing respect for the workplace every day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/Occupational Safety and Health Management System Award.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">Occupational Safety and Health Management System Award</h4>
                            <p> The implementation of Occupational Safety and Health Management System (SMK3) in the
                                workplace has resulted in an achievement of 92.77% (Satisfactory) for the advanced level
                                category.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/lme.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">LME</h4>
                            <p> Copper Cathode registered in LME (London Metal Exchange) Grade A on July 2001.
                                Notes : Since 2004, LME has announced to terminate the issuing of brand certificates and
                                changed through the publication of Notice of listed brands at LME web site.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/BKPM .png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">BKPM</h4>
                            <p> PT Smelting achieved Yasa Ayodhya Adinugraha Award from Capital Investment Coordinating
                                Board in September 2002
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/smk3.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">SMK3</h4>
                            <p> January 2005 and February 2008, PT Smelting achieved golden flag of OSH movement and
                                last update in 2019 PTS returned to get the gold flag
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/halal.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">HALAL DECREE </h4>
                            <p> Sulfuric acid (GSR) of PT Smelting product has obtained halal decree from the
                                Indonesian Council of Ulama of East Java since March 31, 2022
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/lme2.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">LME RESPONSIBLE SOURCING</h4>
                            <p> Independent Assurance Report by KPMG Azusa Sustainability Co., Ltd. on May 24, 2023 with
                                Red Flag Assessment report submitted to LME
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/NATIONALENERGYEFFICIENCYAWARD.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">NATIONAL ENERGY EFFICIENCY AWARD</h4>
                            <p> 2nd Winner of National Energy Efficiency Award 2014 from MEMR (Ministry of Energy and
                                Mineral Resources) in Energy Management System of Big Industry category.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/obvitnas.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">OBVITNAS</h4>
                            <p> PT Smelting registered as National Vital Object by Ministry of Industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-4 col-md-4 imgsertif">
                        <img src="img/erso.png" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 class="fw-bold title">ENVIRONMENTAL REPORT SUBMITTING OBEDIENCE</h4>
                            <p> PT Smelting obtained award from East Java Governor in 2015 for the Environmental Report
                                Submitting Obedience.
                            </p>
                        </div>
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
