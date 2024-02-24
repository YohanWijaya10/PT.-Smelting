<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/headeraboutus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
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

        .rb-container {
            font-family: "PT Sans", sans-serif;
            width: 20%;
            display: block;
            position: relative;

        }

        .rb-container ul.rb {
            padding: 0%;
            display: inline-block;
        }

        .rb-container ul.rb li {
            list-style: none;
            border-left: 1px dashed black;
            padding: 0 0 10vmin 5vmin;
            position: relative;
        }

        .rb-container ul.rb li:last-child {
            border-left: 0;
        }

        .rb-container ul.rb li::before {
            position: absolute;
            left: -1.1vmin;
            top: 0vmin;
            content: " ";
            border: 1vmin solid black;
            border-radius: 500%;
            background: orange;
            height: 2vmin;
            width: 2vmin;
            transition: all 500ms ease-in-out;

        }

        .rb-container ul.rb li:hover::before {
            border-color: #232931;
            transition: all 1000ms ease-in-out;
        }

        ul.rb li .timestamp {
            color: #0F6456;
            font-weight: bold;
            position: relative;
            width: 20vmin;
            font-size: 3vmin;
            text-align: left;
        }

        .item-title {
            color: ;
            font-size: 3vmin;
            text-align: left;
        }

        .journey {
            margin: 2%;
            border: 1px solid red;
        }

        .righttext4 {
            font-family: 'Source Code Pro',
                arial;
            font-size: 8vmin;
            color: #660100;
            font-weight: bold;
            writing-mode: vertical-rl;
            text-orientation: upright;
        }

        .container4 {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            text-align: center;
            align-items: center;
            position: relative;
        }

        .Mcontainer4 {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            text-align: center;
            align-items: center;
            position: relative;
        }


        #animation-bg {
            width: 100%;
            height: 200vh;
            overflow: hidden;
            position: absolute;
        }
        .fore {
            color: #660100;
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
            <a class="navbar-brand" href="#"><img class="logo" src="img/logosmelting.png" width="70"
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
                            <li><a class="dropdown-item" href="/aboutus">Profile</a></li>
                            <li><a class="dropdown-item" href="/managementsystem">Management System</a></li>
                            <li><a class="dropdown-item" href="/award&sertification">Award & Sertification</a></li>
                            <li><a class="dropdown-item" href="/jobopportunity">Job Opportunity</a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown  mx-3 text-light">
                        <a class="nav-link dropdown-toggle text-white fw-ligter" href="#" id="navbarDropdown" role="button"
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
                        <a class="nav-link text-light fw-ligter" href="/environmental">Environmental</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-ligter" href="/csr">CSR Activity</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-ligter" href="/news">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-ligter" href="#">Sitemap</a>
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
        <div class="row mt-5">
            <a class="backbtn" href="/aboutus" style="text-decoration: none">
                <h5>← Back</h5>
            </a>
        </div>
    </div>
    <nav class="nav  justify-content-center">
        <a class="nav-link p-1 mx-md-5 text-black-50" aria-current="page" href="/overview">Overview</a>
        <a class="nav-link p-1 mx-md-5 text-black active fw-bolder " href="/timeline">Timeline</a>
        <a class="nav-link p-1 mx-md-5 text-black-50" href="/visionmission">Vision & Mission</a>
        <a class="nav-link p-1 mx-md-5 text-black-50" href="/gallery">Gallery</a>
    </nav>
    <div class="container mt-5">
        <div class="row ">
            <h2 class="heading fore">PT. Smelting:<span class="fw-lighter"> Milestone</span></h2>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="mcontainer4">
                <div class="container4">
                    <div class="righttext4 reveal">
                        <span>Our Journey</span>
                    </div>
                    <div class="rb-container">
                        <ul class="rb">
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    1994 September
                                </div>
                                <div class="item-title">PT. Freeport Indonesia invited Mitsubishi Material Corporation
                                    to make PT. Smelting Project</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    7 Feb 1996
                                </div>
                                <div class="item-title">
                                    Establishment of Company
                                </div>

                                <div class="timestamp mt-2">
                                    12 Jul 1996
                                </div>
                                <div class="item-title">
                                    Earth Breaking Ceremony
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    31 Aug 1998 <br>
                                </div>
                                <div class="item-title">Completion of Construction</div>
                                <div class="timestamp">
                                    14 Dec 1998<br>
                                </div>
                                <div class="item-title">Trial Operation</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    5 May 1999
                                </div>
                                <div class="item-title">Start of Commercial Production (Design Capacity: 200,000 TPY).
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    July 2000
                                </div>
                                <div class="item-title">PT. Smelting obtain Industrial Business License</div>

                                <div class="timestamp">
                                    25 Aug 2000
                                </div>
                                <div class="item-title">Opening Ceremony by The President of Republic of Indonesia
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    10 July 2001
                                </div>
                                <div class="item-title">Copper Cathode Registered to LME Grade A</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    11 Jan 2002
                                </div>
                                <div class="item-title">Obtain ISO 9001: 2000 Certificate</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    15 Jan 2004
                                </div>
                                <div class="item-title">Obtain ISO 9001: 2000 Certificate</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Aug 2006
                                </div>
                                <div class="item-title">Completion of Refinery 2nd Expansion Work (Capacity : 270,000
                                    TPY)</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Sep 2009
                                </div>
                                <div class="item-title">Completion of Refinery 3rd Expansion Work (Capacity : 300,000
                                    TPY)</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Sep 2014
                                </div>
                                <div class="item-title">Obtain ISO 14001:2004 Certificate</div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Nov 2017
                                </div>
                                <div class="item-title">Upgraded certification of ISO 14001:2015
                                    Obtained National Object Vital status from Industrial Minister
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Sep 2018
                                </div>
                                <div class="item-title">Obtained SNI 0030:2011 Sulfuric Acid
                                </div>
                                <div class="timestamp">
                                    Nov 2018
                                </div>
                                <div class="item-title">Completion of Smelter & Acid Plant Expansion Work (Cap. : 1.1
                                    MTPY)
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Jan 2019
                                </div>
                                <div class="item-title">Obtained SNI 0030:2011 Sulfuric Acid
                                </div>
                                <div class="timestamp">
                                    21 May 2019
                                </div>
                                <div class="item-title">Completion of Smelter & Acid Plant Expansion Work (Cap. : 1.1
                                    MTPY)
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Aug 2020
                                </div>
                                <div class="item-title">Obtained SNI 0030:2011 Sulfuric Acid
                                </div>
                                <div class="timestamp">
                                    Sep 2020
                                </div>
                                <div class="item-title">Completion of Smelter & Acid Plant Expansion Work (Cap. : 1.1
                                    MTPY)
                                </div>
                            </li>
                            <li class="rb-item reveal" ng-repeat="itembx">
                                <div class="timestamp">
                                    Aug 2021
                                </div>
                                <div class="item-title">Change of shareholder : Mitsubishi Materials Company 60.5% and
                                    PT Freeport Indonesia 39.5%
                                </div>

                            </li>
                        </ul>
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
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
