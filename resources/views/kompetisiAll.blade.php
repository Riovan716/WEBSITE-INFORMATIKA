@extends('master')

@section('section')
<div class="container mt-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold"><strong>Kompetisi</strong></h1>
        <hr class="w-50 mx-auto">
    </div>

    <!-- Kompetisi List -->
    <div class="row justify-content-center">
        @foreach ($kompetisi as $item)
        <div class="m-2 p-2">
            <div class="d-flex mt-2" style="background-color: rgb(160, 170, 206);">
                <div class="card-body p-4" style="background-color: rgba(245, 245, 220, 0.144);">
                    <h3 class="card-title fw-bold">
                        <img src="{{ asset('asset/img/Kompetisi/' . $item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid mb-3" style="max-height: 200px; object-fit: cover;">
                        <a href="/kompetisi/{{ $item->id }}" class="text-dark text-decoration-none">
                            {{ $item->nama }}
                        </a>
                    </h3>
                    <p class="mb-1">Oleh: <strong>{{ $item->penyelenggara }}</strong></p>
                    <p>Batas Pendaftaran: {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $kompetisi->links('custom') }}
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
</script>
@endsection
