<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .navbar-scrolled {
            background-color: #0f6456;

            transition: ease-in-out 0.5s;

        }

        .navbar-scrolled .navbar-nav .nav-link {
            color: white !important;
            transition: ease-in-out 0.5s;

        }

        .navbar {
            overflow-x: hidden;
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
                        <a class="nav-link text-light fw-lighter " href="/aboutus"> About Us</a>
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
                        <a class="nav-link text-light fw-bolder" href="/news">News</a>
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

    <div class="container">
        <div class="container m-3 mt-5">
            <div class="row m-md-5">
                <h2 class="fw-bolder profileTitle ">News<span class="fw-light"> From Smelting</span>
                </h2>
            </div>
        </div>

        <div class="container m-3 mt-5">
            <div class="row justify-content-center " onclick="pindahKeBerita1()" >
                <div class="col-md-3 col-auto imgnews">
                    <img src="img/beritaProperHijau.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row  ">
                        <div class="col-auto   ">
                            <h6 class=" m-0 p-1  date text-white rounded ">23 January 2024</h6>
                        </div>
                        <h4 class="mt">PT Smelting Raih PROPER Hijau Kembali</h4>
                        <p class="text-black-50">PT Smelting (PTS) kembali meraih PROPER Hijau di tahun 2023 pada
                            penghargaan Program Penilaian
                            Peringkat Kinerja Perusahaan dalam Pengelolaan Lingkungan (PROPER) yang diselenggarakan
                            oleh
                            Kementerian Lingkungan Hidup dan Kehutanan (KLHK).
                        </p>
                    </div>
                    <div class="row justify-content-end ">
                        <div class="col-auto col-md-2 ">
                            <button type="button" class="btn  align-self-end btngreen"><a class="btngreen"
                                    style="text-decoration: none" href="/berita1">Read More...</a></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mt-4" onclick="pindahKeBerita2()">
                <div class="col-md-3 imgnews">
                    <img src="img/Tonggak.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row  ">
                        <div class="col-auto   ">
                            <h6 class=" m-0 p-1  date text-white rounded ">2 February 2024</h6>
                        </div>

                        <h4>Tonggak Bersejarah PT Smelting</h4>
                        <p class="text-black-50">Panas matahari yang menyengat tak menghalangi Presiden Joko Widodo
                            (Jokowi)
                            dan sejumlah menteri mengagumi smelter tembaga PT Smelting (PTS) di Gresik. Para tamu VVIP
                            (Very-Very Important Person) itu tampak serius mendengarkan penjelasan tentang operasional
                            smelter tersebut dari Presiden Direktur PTS Hideya Sato (Sato). </p>
                    </div>
                    <div class="row justify-content-end ">
                        <div class="col-auto col-md-2  ">
                            <button type="button" class="btn  align-self-end btngreen"><a class="btngreen"
                                    style="text-decoration: none" href="/berita2">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 " onclick="pindahKeBerita3()">
                <div class="col-md-3 imgnews">
                    <img src="img/runner.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row  ">
                        <div class="col-auto   ">
                            <h6 class=" m-0 p-1  date text-white rounded ">3 February 2024</h6>
                        </div>
                        <h4>Klub Baru untuk Para Pelari</h4>
                        <p class="text-black-50">Satu lagi klub hobi terbentuk di lingkungan PT Smelting (PTS). Namanya
                            Smelting Running Club. Sesuai namanya, ini adalah klub para penggemar olah raga lari. Kapan
                            klub
                            ini terbentuk? Siapa saja anggotanya? Kapan latihan? Bagaimana cara untuk menjadi anggota
                            klub?
                            Apa saja keuntungannya? Berikut petikan wawancara Smelting Magazine tentang itu.</p>
                    </div>
                    <div class="row justify-content-end ">
                        <div class="col-auto col-md-2  ">
                            <button type="button" class="btn  align-self-end btngreen"><a class="btngreen"
                                    style="text-decoration: none" href="/berita3">Read More...</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 " onclick="pindahKeBerita4()">
                <div class="col-md-3 imgnews">
                    <img src="img/hiv.jpeg" alt="">
                </div>
                <div class="col-md-8 col-auto">
                    <div class="row  ">
                        <div class="col-auto   ">
                            <h6 class=" m-0 p-1  date text-white rounded ">3 February 2024</h6>
                        </div>

                        <h4>HIV/AIDS Lewat Promotif dan Preventif</h4>
                        <p class="text-black-50">PT Smelting (PTS) terus mengkampanyekan cara hidup sehat kepada semua
                            karyawannya. Di akhir tahun 2023, PTS kembali menggelar kegiatan promotif dan preventif
                            untuk
                            mencegah penularan HIV/AIDS. Agenda itu mengangkat tema “Let Communities Lead”.</p>
                    </div>
                    <div class="row justify-content-end ">
                        <div class="col-auto col-md-2">
                            <button type="button" class="btn  align-self-end btngreen"><a class="btngreen"
                                    style="text-decoration: none" href="/berita4">Read More...</a></button>
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
                        <button type="button" class="btn  align-self-end btngreen" onclick="gallery()">Read More...</button>
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
