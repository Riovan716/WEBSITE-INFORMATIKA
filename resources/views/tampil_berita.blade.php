@extends('master')

@section('section')
<div class="container my-5">
    <!-- Judul Berita -->
    <h1 class="text-center mb-4">{{ $berita->judul }}</h1>

    <!-- Gambar dan Deskripsi Berita -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('asset/img/Berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-6">
            <div class="text-body">
                <p class="text-justify">{{ $berita->isi }}</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
