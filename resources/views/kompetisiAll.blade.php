@extends('master')

@section('section')
<div class="container mt-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="text-dark container text-center" style="font-weight: bold">Kompetisi</h1>
        <hr class="w-50 mx-auto">
    </div>

    <!-- Kompetisi List -->
    <div class="event-card" style="background-color: rgb(255, 255, 255); border-radius: 25px;">
        @foreach ($kompetisi as $item)
        <div class="event-card shadow-sm p-4 rounded-3 mb-4" style="background-color: rgb(255, 255, 255); border-radius: 25px;">
            <div class="d-flex flex-wrap align-items-center">
                <div class="card-body p-4" style="background-color: rgba(245, 245, 220, 0.144);">
                    <h3 class="card-title fw-bold">
                        <!-- Gambar Kompetisi -->
                        <img src="{{ asset('asset/img/Kompetisi/' . $item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover; border-radius: 10px;">
                        
                        <!-- Nama Kompetisi dengan Link -->
                    
                        <a href="/kompetisi/{{ $item->id }}" class="kompetisi-link">
                            {{ $item->nama }}
                        </a>
                    </h3>
                    <p class="mb-1">Oleh: <strong>{{ $item->penyelenggara }}</strong></p>
                    <p>Batas Pendaftaran: {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $kompetisi->links('custom') }}
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Efek hover untuk nama kompetisi */
    .kompetisi-link {
    transition: color 0.3s ease, text-decoration 0.3s ease;
    color: black; /* Pastikan warna default adalah hitam */
}

.kompetisi-link:hover {
    color: #0079c2; /* Ganti warna saat hover */
}
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
</script>
@endsection
