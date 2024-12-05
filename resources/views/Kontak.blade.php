@extends('master')

@section('section')
<section>
    <h1 class="text-body text-center" style="font-size: 3em;"><b>Kontak</b></h1>
    <div class="container">
        <!-- Wrapper untuk border besar -->
        <div class="custom-border rounded-4 p-4 shadow-lg">
            <div class="row">
                <!-- Kolom Data Kontak -->
                <div class="col-lg-6 col-md-12 mb-3">
                    <div class="bg-light p-4 rounded-4 shadow-sm" style="font-size: 18px; text-align: justify;">
                        @if($kontak)
                            <p><i class="ri-phone-line"></i><b>Nomor Telepon:</b></p>
                            <p>{{ $kontak->nomor_telepon }}</p>
                            <br>
                            
                            <p><i class="ri-map-pin-line"></i><b>Kode Pos:</b></p>
                            <p>{{ $kontak->kode_pos }}</p>
                            <br>

                            <p> <i class="ri-instagram-line"></i><b>Instagram:</b></p>
                            <p>
                                <a href="{{ $kontak->instagram }}" target="_blank" class="text-primary fw-bold text-decoration-none">Akun Instagram</a>
                            </p>
                            <br>
                            
                            <p> <i class="ri-mail-line"></i><b>E-mail:</b></p>
                            <p>{{ $kontak->email }}</p>
                        @else
                            <p>Data kontak belum tersedia.</p>
                        @endif
                    </div>
                </div>
                
                <!-- Kolom Maps -->
                <div class="col-lg-6 col-md-12">
                    <div class="mapswrapper">
                        <h2 class="map-title">Find Us</h2>
                        <iframe
                            width="100%"
                            height="100%"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=94PX%2B766%2C%20Sitoluama%2C%20Laguboti%2C%20Toba%2C%20North%20Sumatra&zoom=17&maptype=roadmap">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-border {
    border: 3px solid #ccc; 
    border-radius: 12px; 
    padding: 20px; 
    background-color: #f8f9fa; 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
}

    .mapswrapper {
        background: #fff;
        position: relative;
        border: 2px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        height: 100%; /* Tinggi penuh */
    }

    .mapswrapper h2.map-title {
        margin-bottom: 10px;
        font-size: 1.5rem;
        text-align: center;
        color: #333;
    }

    .mapswrapper iframe {
        border: 0;
        width: 100%;
        height: 400px; /* Tinggi untuk iframe */
    }

    @media (max-width: 768px) {
        .mapswrapper iframe {
            height: 300px; /* Penyesuaian untuk layar kecil */
        }
    }

</style>

@endsection

