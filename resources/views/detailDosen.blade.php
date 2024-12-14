@extends ('master')

@section('section') 

<div class="container text-body">
  <!-- Nama Dosen -->
  <h1 class="text-center my-4" style="font-family: 'Arial', sans-serif; font-weight: bold; color: #333;">{{ $dosen->nama }}</h1>
</div>

<!-- Gambar Dosen -->
<div class="d-flex justify-content-center container mb-4">
  <img src="{{ asset('asset/img/Dosen/' . $dosen->gambar) }}" 
  alt="{{ $dosen->gambar }}" class="img-fluid shadow-lg" style="border-radius: 10px; max-width: 300px; max-height: 300px; object-fit: cover;">
</div>

<!-- Deskripsi Dosen -->
<div class="container">
  <p class="text-center my-4" style="font-family: 'Arial', sans-serif; font-size: 1.1rem; line-height: 1.8; color: black; text-decoration: none;">
    {!! $dosen->deskripsi !!}
  </p>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
