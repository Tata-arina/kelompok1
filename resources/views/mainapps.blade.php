<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- bosstrap -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- css -->
    <style type="text/css">
        #pembuka {
            background: none;

        }

        #baground {
            background-size: cover;
            background-attachment: fixed;
            padding-top: 150px;
            height: 800px;
            max-height: 1112px;
        }

        :root {
            --warna-bg-info: #163858;
            --warna-text-info: #6096B4;
            --warna-bg: white;
            --font1: 'Roboto Condensed', sans-serif;
        }

        body {
            font-family: 'Poopins', sans-serif;
        }

        .bg-blue {
            background-color: var(--warna-bg-info);
        }


        #baground {
            background-image: url('{{ asset('image/sma.jpg') }}');
        }

        #lambang {
            background: no-repeat;
            background-size: cover;
        }


        #navbarNav a:hover {
            color: #919496;
        }

        #navbarNav a {
            font-family: 'Ubuntu', sans-serif;
        }

        .row a {
            text-decoration: none;
            color: #000;
        }
    </style>
    <!-- css -->

    <title>Portal PPDB</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top shadow-lg">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-brand" href="#"><img src={{ asset('image/logo-sma.png') }} width="50">PPDB
                    ONLINE</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Persyaratan">Persyaratan</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- navbar -->

    <!-- jumbotron -->
   @yield('content')
    <!-- end jumbotron -->

    <!-- main -->
    <main>
        <!-- tentang -->
        <!-- footer -->
        <section id="Contact">
            <div class="container-fluid bg-blue mt-5">
                <div class="container">
                    <div class="row align-items-center py-3">
                        <div class="col-6">
                            <img src={{ asset('image/Logo-sma.png') }} class="img-fluid">
                        </div>

                        <div class="col-6">
                            <h3 class="text-white">Peta Sekolah</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.532360772402!2d104.77438367376035!3d-2.9496531397040284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b768ef19aea31%3A0xa411f217fd10bca!2sSMA%20Kusuma%20Bangsa%20Palembang!5e0!3m2!1sid!2sid!4v1693491742832!5m2!1sid!2sid"
                                width="450" height="250" style="border:0;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row py-3">

                        <div class="col-3 footer-contact">
                            <div class="text-white">Hubungi Kami</div>
                            <p class="text-white">Jl. Residen Abdul Rozak, 8 Ilir <br>
                                Kec. Ilir Tim. II, Kota Palembang <br>
                                Contact Center 0-8969-1819-664 <br>
                                Malayani mulai <br>
                                Jam 08.00 s/d 15.00 WIB

                            </p>
                        </div>

                        <div class="col-3">
                            <div class="text-white">Framework</div>
                            <p class="text-white">Bootstrap <br>Laravel</p>
                        </div>

                        <div class="col-3">
                            <div class="text-white">Library</div>
                            <p class="text-white">Animate On Scroll Library</p>
                        </div>


                        <div class="col-3">
                            <div class="text-white">Developer</div>
                            <p class="text-white">Nasta Arina <br> Intan Ramadhani <br> Najwa Nur Octan</p>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="text-white text-center">©2023 PPDB online | Sma Kusuma Bangsa</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->



        <!-- aos -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- aos -->

        <!-- js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
        </script>
        <!-- js -->
</body>

</html>
