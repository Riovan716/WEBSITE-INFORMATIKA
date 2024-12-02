<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<title>Informatika</title>
<style>
    html,
    body {
        height: 100%;
        /* Pastikan halaman selalu mengambil 100% tinggi viewport */
        margin: 0;
        display: flex;
        flex-direction: column;
        /* Atur tata letak secara vertikal */
    }

    #app {
        flex: 1;
        /* Konten utama akan mengisi ruang yang tersisa */
        display: flex;
        flex-direction: column;
    }

    .text-white {
        color: #ffffff;
    }


    .hover\:text-gray-300:hover {
        color: #d1d5db;
    }


    body {
        min-width: 920px;
    }

    .dropcolor {
        background-color: #767676;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }



    /* slideshiot */

    /* endslidehost */

    /* Modif Corry */
    /* Ganti warna teks saat kursor diarahkan */
    .dosen-name:hover {
        color: blue;
        /* Ganti dengan warna yang diinginkan */
    }

    /* Tambahkan garis bawah saat kursor diarahkan */
    .card-link:hover .dosen-name {
        text-decoration: underline;
        /* Menambahkan garis bawah */
    }

    .gbrDosen {
        border-radius: 50%;
        width: 25%;
    }

    .serv ul {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        justify-content: center;
    }

    .serv ul li {
        list-style: none;
        flex: 0 0 33.333333%;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .martop {
        margin-top: 20px;
        background-color: rgba(255, 0, 0, 0.109);
        background-size: contain;
    }

    .beff {
        margin: 20px;
        background-color: aliceblue;
    }

    .afft {
        margin: 20px;
    }

    * {
        font-family: 'Nunito';
    }

    .ele {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .lingkar {
        border-radius: 50%;
        height: 10em;
        width: 10em;
        position: relative;
        border: 7px solid rgba(0, 121, 194, 1);
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    .trigger:hover+.keTrig {
        visibility: visible;
    }

    .keTrig {
        padding: 3%;
        background-color: rgba(90, 94, 123, 0.95);
        list-style: none;
        color: white;
        position: absolute;
        visibility: hidden;
    }

    .cards-wrapper {
        display: flex;
    }

    .card {
        margin: 0.5em;
        width: calc(100%/3);
    }

    .image-wrapper {
        height: 10vw;
        margin: 0 auto;
        /* display: flex;
              justify-content: center;
              align-items: center; */
    }

    .image-wrapper img {
        max-width: 100%;
        max-height: 100%;
    }

    /* .biru:hover{
              color: blue
          } */

    .mainmenubtn {

        cursor: pointer;
    }

    .mainmenubtn:hover {
        background-color: grey;
    }

    .dropdown-child {
        display: none;
        position: absolute;
        background-color: rgba(90, 94, 123, 0.67);
        border-radius: 3%;
    }

    .dropdown-child a {
        color: white;
        padding: 20px;
        text-decoration: none;
        display: block;
        border-radius: 3%;
    }

    .dropdown-child a:hover {
        background-color: rgba(90, 94, 123, 1);
        border-radius: 3%;
        z-index: 100000000000;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #a0c4ff;
        color: #fff;

    }

    .text-full {
        text-align: justify;
        color: #4a4a4a
    }


    .dropdown:hover .dropdown-child {
        display: block;
    }

    .text-body {
        color: #266bb1 !important;
    }

    .horizontal {
        width: 339px;
        margin: 0 auto;
        border: 2px solid;
        color: rgba(0, 121, 194, 1);
    }

    .hr-vertical {
        width: 2px;
        height: 100%;
        border: 2px solid rgba(0, 121, 194, 1);
        margin: 0;
        transform: rotate(180deg);
    }


    /* pagination in eventAll */

    /* croptting */
</style>


<body>
    <header style="background-color: #09306B ;">
        <div class="container-fluid py-3 px-4">
            <div class="row align-items-center">

                <!-- Logo di bagian kiri -->
                <div class="col-sm-8">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                        <img src="{{ asset('asset/img/logo_del.png') }}" alt="Logo" class="logo rounded me-4"
                            width="75em">
                        <span>
                            <span class="ms-1 text-light" style="font-size: 36px; font-family: Nunito">Institut
                                Teknologi Del</span>
                            <br>
                            <span class="ms-1 text-light" style="font-size: 20px; font-family: Nunito">Sarjana
                                Informatika</span>
                        </span>
                    </a>
                </div>

                <!-- Navbar di bagian kanan -->
                <div class="col-sm-4 d-flex justify-content-end flex-column">
                    <nav class="navbar navbar-expand-xl navbar-light">
                        <div class="container-fluid d-flex justify-content-end">

                            <!-- Tombol burger untuk menu mobile -->
                            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Daftar menu navbar -->
                            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                                <ul class="navbar-nav mr-auto gap-3 justify-content-end ">
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="/"
                                            style="font-size: 16px; font-family: Nunito;">Beranda</a>
                                    </li>

                                    <!-- Profil -->

                                    <li class="nav-item">
                                        <div class="dropdown show">
                                            <a class="nav-link dropdown-toggle text-light" href="#"
                                                style="font-size: 16px; font-family: Nunito" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-target="#dropdownMenu">Profil</a>
                                            <ul class="dropdown-menu dropdown-menu-center dropcolor"
                                                aria-labelledby="dropdownMenuLink" id="dropdownMenu"
                                                style="width: fit-content;">
                                                <li><a class="dropdown-item text-light" href="/visiMisi"
                                                        style="font-size: 16px; font-family: Nunito;">Visi Misi</a></li>
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/sejarah"
                                                        style="font-size: 16px; font-family: Nunito;">Sejarah</a></li>
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/organisasi"
                                                        style="font-size: 16px; font-family: Nunito;">Himasti</a></li>
                                                <hr>
                                                <!-- <li><a class="dropdown-item text-light" href="/sejarah" style="font-size: 16px; font-family: Nunito;">Data Pendaftaran</a></li> -->
                                            </ul>
                                        </div>
                                    </li>

                                    <!-- KURIKULUM -->

                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="/kurikulum"
                                            style="font-size: 16px; font-family: Nunito">Kurikulum</a>
                                    </li>

                                    <li class="nav-item">
                                        <div class="dropdown show">
                                            <a class="nav-link dropdown-toggle text-light" href="#"
                                                style="font-size: 16px; font-family: Nunito" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-target="#dropdownMenu">Akademik</a>
                                            <ul class="dropdown-menu dropdown-menu-center dropcolor"
                                                aria-labelledby="dropdownMenuLink" id="dropdownMenu"
                                                style="width: fit-content;">
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/staffDosen"
                                                        style="font-size: 16px; font-family: Nunito">Dosen</a></li>
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/mahasiswa"
                                                        style="font-size: 16px; font-family: Nunito">Mahasiswa</a></li>
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/alumni"
                                                        style="font-size: 16px; font-family: Nunito">Alumni</a></li>
                                                <hr>
                                                <li><a class="dropdown-item text-light" href="/kompetisiAll"
                                                        style="font-size: 16px; font-family: Nunito;">Kompetisi</a>
                                                </li>
                                                <hr>
                                            </ul>
                                        </div>
                                    </li>

                                    <!-- KONTAK -->

                                    {{-- <li class="nav-item">
                    <a class="nav-link text-light" href="/kontak" style="font-size: 16px; font-family: Nunito">Kontak</a>
                  </li> --}}

                                    <!-- LOGIN ADMIN -->

                                    <li class="nav-item" style="margin-left: 10px;">
                                        <a href="/admin" class="btn btn-primary"
                                            style="font-size: 16px; width: 150px; font-family: Nunito; background-color: #0079C2;">Login
                                            Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- KOLOM PENCARIAN -->

                    <div class="row  d-flex justify-content-end">
                        <div class="col col-6 " style="width: 300px;">
                            <form action="/cariProses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="text" class="form-control" placeholder="Pencarian.."
                                    style="background-color: aliceblue;" name="cari" onclick="clearInput(this)">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <!-- SECTION -->
    @yield('section')
    <!-- END SECTION -->


    <br>
    <footer>
        <div style="background-color: #4A90E2; padding: 20px 0;">
            <div
                style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
                <a style="text-align: center;">
                    <div style="text-align: center">
                        <a href="https://kp.delcom.online/">
                            <div
                                style="background-color: #e2e8f0; color: #000; padding: 10px 20px; border-radius: 5px; font-weight: bold;">
                                Web KP/Magang
                            </div>
                        </a>
                    </div>
                    <a href="https://www.del.ac.id/">
                        <img src="{{ asset('asset/img/logo_del_2.jpg') }}" alt="Logo Del" style="height: 60px;">
                    </a>

                    <a href="https://himasti.delcom.org/">
                        <img src="{{ asset('asset/img/logo_himasti.jpg') }}" alt="Logo Himasti"
                            style="height: 60px;">
                    </a>
                    <a href="#">
                        <img src="{{ asset('asset/img/spmb.png') }}" alt="SPMB IT Del" style="height: 60px;">
                    </a>
                </a>
            </div>
        </div>

        <div style="background-color: #003f88; color: #ffffff; padding: 80px 0;">
            <div
                style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start;">

                <!-- Bagian Kiri -->
                <div style="flex: 1; text-align: center;">
                    <p style="font-size: 14px; margin-bottom: 10px;">
                        Copyright 2024 © S1IF IT Del. All Rights Reserved.
                    </p>

                    <div style="display: flex; justify-content: center; gap: 15px; align-items: center; margin-top: 10px;">
                        <a class="bi bi-instagram" style="font-size: 2rem; color: #e1306c;" href="https://www.instagram.com/himasti_itdel/"></a>
                        <a class="bi bi-telephone" style="font-size: 2rem; color: #157347;" href="tel:+62632331234"></a>
                        <a class="bi bi-envelope" style="font-size: 2rem; color: #1da1f2;" href="mailto:Informatika@del.ac.id"></a>

                    </div>
                </div>


                <!-- Bagian Kanan -->
                <div style="flex: 1; text-align: center; font-size: 14px;">
                    <b style="margin-bottom: 5px; font-size: 20px;">Institut Teknologi Del</b>
                    <p style="margin-bottom: 5px;">Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara,
                        Indonesia</p>
                    <p>Kode Pos: 22381</p>
                </div>

            </div>
        </div>
    </footer>




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".afft",
            prevEl: ".beff",
        },
    });

    function clearInput(input) {
        input.value = '';
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>