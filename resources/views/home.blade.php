@extends('master')

@section('section')
<section>

    

    <div style="z-index: 9;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('asset/img/pemandangan_1.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jalan Setapak Fakultas FITE</h5>
                        <p>jalan setapak di lokasi fakultas FITE dihiasi dengan tanaman-tanaman hijau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/pemandangan_2.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Institut Teknologi Del</h5>
                        <p>pemandangan dari atas kampus Institut Teknologi Del</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/pemandangan_3.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gedung Fakultas Informatika dan Teknik Elektro</h5>
                        <p>Gedung ini digunakan untuk perkuliahan program studi S1-Informatika, S1-Sistem Informasi, dan S1-Teknik Elektro</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/pemandangan_4.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;width:100%;object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ruangan Kelas di gedung</h5>
                        <p>Gedung ini memiliki fasilitas-fasilitas seperti saung, ruangan kelas, laboratorium elektro, laboratorium komputer</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <h1 class="text-body text-center"><strong>Program Studi <font style="color:rgba(0, 121, 194, 1);">Informatika</font></strong></h1>
    <p class="container text-center mb-5 text-gray">Informatika merupakan salah satu core technology dalam
        sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication
        Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat
        lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan
        Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya
        pencerdasan kehidupan bangsa</p>

    <hr class="horizontal mb-5" />
 
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-dark"><strong>EVENTS</strong></h1>
            <a href="/eventsAll" class="text-primary text-decoration-none">Selengkapnya →</a>
        </div>
        <div id="event-container" class="row bg-light py-3 px-2" style="border-radius: 10px;">
            @foreach ($events as $event)
            <a href="/event/{{ $event->id }}" class="col-md-4 d-flex align-items-center mb-3 text-decoration-none text-dark">
                <!-- Tanggal Event -->
                <div class="d-flex flex-column align-items-center justify-content-center text-white" style="width: 60px; height: 60px; background-color: #003366; border-radius: 10px; text-align: center;">
                    <span style="font-size: 1.2rem; font-weight: bold;">{{ date('d', strtotime($event->waktu_mulai)) }}</span>
                    <span style="font-size: 0.8rem;">{{ date('M', strtotime($event->waktu_mulai)) }}</span>
                </div>
                <!-- Nama Event -->
                <div class="ms-3">
                    <h6 class="mb-1 text-dark">{{ $event->nama }}</h6>
                    <p class="text-muted small mb-0">{{ date('Y', strtotime($event->waktu_mulai)) }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    
    
    

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-dark"><strong>KOMPETISI</strong></h1>
            <a href="/kompetisiAll" class="text-primary text-decoration-none">Selengkapnya →</a>
        </div>
        <div id="kompetisi-container" class="row bg-light py-3 px-2" style="border-radius: 10px;">
            @foreach ($kompetisi as $item)
            <a href="/kompetisi/{{ $item->id }}" class="col-md-4 d-flex align-items-center mb-3 text-decoration-none text-dark">
                <!-- Tanggal Kompetisi -->
                <div class="image-wrapper"><img src="{{ asset('asset/img/Kompetisi/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="border-radius:4px 4px">
                </div>
           
                <!-- Nama Kompetisi -->
                <div class="ms-3">
                    <h6 class="mb-1 text-dark">{{ $item->nama }}</h6>
                    <p class="text-muted small mb-0">Batas Pendaftaran: {{ date('Y', strtotime($item->tanggal)) }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    
        <div class="container my-5" id="berita">
                            <h1><a href="/beritaAll"><b>BERITA TERKINI</b></a></h1>
                            <hr>
                            <div class=" d-flex text-dark">
                                <p class=" d-flex align-items-center"><i class="beff ri-arrow-left-s-line"></i></p>

                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper ">
                                        @foreach ($berita as $item)
                                        <div class="swiper-slide">
                                            <div class="bg-light" style="border-radius:10px">
                                                <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="border-radius:9px 9px 0px 0;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="/berita/{{ $item->id }}">
                                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                                    </a>
                                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <br> <br><br>
                                    <div class="swiper-pagination martop" style="background-color: white;"></div>

                                </div>
                                <p class=" d-flex align-items-center"><i class="beff ri-arrow-right-s-line"></i></p>
                            </div>

                        </div>

                        <br>
                        <div class="d-flex justify-content-around text-body text-center mb-2 ">
                            <div class="lingkar">
                                <a href="/mahasiswa">
                                    <div class="ele">
                                        <i class="ri-user-fill"></i>
                                        <p><b>Mahasiswa Aktif</b></p>
                                        <h2><b>{{ $jumlahAktif }}</b></h2>
                                    </div>
                                </a>
                            </div>
                            <div class="lingkar">
                                <a href="/mahasiswaAlumni">
                                    <div class="ele">
                                        <i class="ri-group-fill"></i>
                                        <h4><b>Alumni</b></h4>
                                        <h2><b>{{ $jumlahAlumni }}</b></h2>
                                    </div>
                                </a>
                            </div>
                            <div class="lingkar">
                                <a href="/staffDosen">
                                    <div class="ele">
                                        <b>
                                            <i class="ri-pages-line"></i>
                                            <p><b>Dosen</b></p>
                                            <h2><b>{{ $dosen }}</b></h2>
                                        </b>
                                    </div>
                                </a>
                            </div>
                        </div>
</section>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">

</script>
@endsection
