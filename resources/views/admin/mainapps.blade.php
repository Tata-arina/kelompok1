<!DOCTYPE html>
<html lang="en">
<title>@yield('title')</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- bosstrap -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- css -->
    <style type="text/css">
        :root {
            --warna-bg-info: #1b5b9c;;
        }

        body {
            font-family: 'Poopins', sans-serif;
        }

        .bg-blue {
            background-color: var(--warna-bg-info);
        }

        .navbar-brand {
            font-weight: 600;
        }

        #pembuka {
            background: none;
        }

        #baground {
            background-size: cover;
            background-attachment: fixed;
            padding-top: 150px;
            height: 500px;
            max-height: 1112px;
        }

        #baground {
            background-image: url('{{ asset('image/gedung19.jpeg') }}');
        }

        #lambang {
            background: no-repeat;
            background-size: cover;
        }

        #navbarNav a:hover {
            color: white;
        }

        #navbarNav a {
            font-family: 'Ubuntu', sans-serif;
        }

        .container {
            width: 80%;
        }

        .sidebar {
            width: 23%;
            float: left;
            margin-top: 15px;
        }

        .widget {
            margin: 10px;
        }

        .jdl-widget {
            background-color: #f1a415;
            color: white;
            text-align: center;
            padding: 6px;
            border-radius: 8px 8px 0px 0px
        }

        .jdl-widget h5{
            height: 15px;
        }

        .isi-widget {
            background-color: rgb(201, 198, 192);
            padding: 6px;
            border-radius: 0px 0px 8px 8px
        }

    </style>
    <!-- css -->
    
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top shadow-lg">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-brand" href="#"><img src={{ asset('image/sma19-.png') }} width="50">PPDB
                    ONLINE</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pengumuman">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-house-door-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login"></a></li>
                            <li><a class="dropdown-item" href="/sign up"></a></li>
                        </ul> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- navbar -->

    @yield('content')


    <section id="Contact">
        <div class="container-fluid bg-blue mt-5">
            <div class="container">
                <div class="row align-items-center py-3">
                    <div class="col-6">
                        <img src="image/sma19-.png" width="80%">
                    </div>

                    <div class="col-6">
                        <h3 class="text-white">Peta Sekolah</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.176113509644!2d104.78651496832512!3d-3.04745123327039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9c5c7a94d91d%3A0x1f25314e1cb6fab4!2sSMA%20Negeri%2019%20Palembang!5e0!3m2!1sid!2sid!4v1693557497119!5m2!1sid!2sid"
                            width="450" height="250" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="row py-3">

                    <div class="col-3 footer-contact">
                        <div class="text-white">Hubungi Kami</div>
                        <p class="text-white">Jl. Gubernur H. A. Bastari, Jakabaring, Sungai Kedukan <br>
                            Kec. Rambutan, Kab. Banyuasin, Sumatera Selatan 30967 <br>
                            Contact Center 0711-7077-785 <br>
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
                        <p class="text-white text-center">©2023 PPDB online | Sma Negeri 19 Palembang</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- js -->
</body>
</html>
