<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/overview.css">
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
            <a class="navbar-brand" href="/"><img class="logo" src="img/logosmelting.png" width="70"
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
        <div class="row mt-5">
            <a class="backbtn" href="/aboutus" style="text-decoration: none">
                <h5>← Back</h5>
            </a>
        </div>
    </div>
    <nav class="nav  justify-content-center">
        <a class="nav-link p-1 mx-md-5 text-black active fw-bolder" aria-current="page" href="/overview">Overview</a>
        <a class="nav-link p-1 mx-md-5 text-black-50" href="/timeline">Timeline</a>
        <a class="nav-link p-1 mx-md-5 text-black-50" href="/visionmission">Vision & Mission</a>
        <a class="nav-link p-1 mx-md-5 text-black-50" href="/gallery">Gallery</a>
    </nav>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <div class="container">
        <div class="row mt-5">
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description"></p>
            </figure>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h3 class="fw-bolder ProfileTitle fore">PT Smelting: <span class="fw-light">Mengawali Keunggulan dalam
                    Peleburan dan Pengilangan Tembaga di Indonesia</span></h3>
            <div class="row mt-3">
                <p>
                    PT Smelting adalah peleburan dan pengilangan tembaga pertama di Indonesia. Pendirian PT Smelting
                    dimulai
                    ketika PT. Freeport Indonesia mengundang Mitsubishi Materials Corporation (MMC) untuk bekerja sama
                    membangun
                    peleburan dan pengilangan tembaga di Indonesia pada tahun 1994. Konstruksi PT Smelting dimulai dari
                    tahun
                    1996 hingga 1998. Pada awal pendiriannya, pabrik PT Smelting dirancang untuk memproduksi 200.000 ton
                    katoda
                    tembaga per tahun. PT Smelting kemudian melakukan ekspansi tiga kali pada tahun 2004, 2006, dan 2009
                    sehingga kapasitas produksinya meningkat menjadi 300.000 ton tembaga per tahun.
                </p>
                <p>
                    PT Smelting menggunakan teknologi Mitsubishi dalam proses peleburan tembaga dan teknologi ISA dalam
                    proses
                    pengilangan tembaga. Proses Mitsubishi adalah proses peleburan dan konversi yang kontinu, ramah
                    lingkungan,
                    dan ekonomis karena mampu menghasilkan tembaga anoda dengan kemurnian tinggi, emisi rendah, dan
                    konsentrasi
                    SO2 yang tinggi dalam gas buangnya. Teknologi ISA mampu menghasilkan tembaga katoda dengan kemurnian
                    99,99%
                    (LME Grade A) dengan waktu operasi tinggi, produktivitas kerja tinggi, tingkat keselamatan tinggi, dan
                    biaya produksi rendah.
                </p>
                <p>
                    Dari proses pengolahan tembaga PT Smelting, terdapat beberapa produk samping yang dihasilkan yaitu
                    asam
                    sulfat, terak tembaga, gipsum, lendir anoda, dan tembaga telluride. Semua produk ini dapat dijual dan
                    digunakan oleh banyak konsumen di dalam negeri dan luar negeri. PT Smelting selalu menjaga limbah
                    agar tidak
                    melebihi ambang batas yang ditentukan dan mematuhi standar serta hukum lingkungan yang telah
                    ditetapkan.
                </p>
                <p>
                    PT Smelting memiliki visi untuk menjadi pabrik peleburan dan pengilangan tembaga yang memiliki
                    reputasi
                    dan paling dapat diandalkan di dunia serta ramah lingkungan. PT Smelting telah memperoleh ISO 9001 dan
                    ISO
                    14001. Selain itu, PT Smelting juga menerapkan program 5S untuk selalu menjaga produktivitas optimum
                    dan
                    menerapkan Kaizen untuk perbaikan terus-menerus. Berbagai penghargaan telah diraih oleh PT Smelting,
                    seperti: PROPER Hijau, Penghargaan Green Industry, Peringkat 2 dalam penghargaan efisiensi energi
                    nasional.
                    PT Smelting juga aktif terlibat dalam memberdayakan masyarakat melalui Pengembangan Masyarakat di
                    bidang
                    kesehatan, pendidikan, pembangunan fisik lingkungan, konservasi keanekaragaman hayati, kewirausahaan,
                    dan
                    agama.
                </p>
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
        Highcharts.chart('container', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Proponent of Gresik Copper Smelter & Refinery',
                align: 'left'
            },

            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            colors: ['#0F6456', '#ECB22E'],
            series: [{
                type: 'pie',
                name: 'Share',
                data: [


                    {
                        name: 'Mitshubishi Materials Corporation',
                        y: 60.5,
                        sliced: true,
                        selected: true
                    },
                    ['PT. Freeport Indonesia', 39.5]

                ]
            }]
        });
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
