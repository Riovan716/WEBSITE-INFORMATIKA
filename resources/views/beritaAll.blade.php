@extends('master')

@section('section')
    <div class="text-light container">
    </div>

    @foreach ($berita as $item)
    <div class="event-card shadow-sm p-4 rounded-3 mb-4" style="background-color: rgb(255, 255, 255); border-radius: 25px;">
        <div class="d-flex align-items-center">
            <!-- Bagian Gambar -->
            <div class="me-4">
                <img src="{{ asset('asset/img/Berita/' . $item->gambar) }}" 
                    alt="{{ $item->gambar }}"
                    style="height: 350px; width: 400px; object-fit: cover; border-radius: 10px;">
            </div>

            <!-- Bagian Teks -->
            <div class="card-body p-4" style="background-color: rgba(245, 245, 220, 0.144); flex: 1;">
                <div class="card-title fw-bold">
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ $item->deskripsi }}</p>
                    <a href="/berita/{{ $item->id }}">
                        <button type="button" class="btn btn-primary">Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endforeach

    <div style="width: 50%; /* or any other width */
    margin: auto;">
        <br>
        {{ $berita->links('custom') }}
    </div>
@endsection
