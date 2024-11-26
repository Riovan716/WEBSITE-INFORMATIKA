@extends('master')

@section('section')
<section>
    <!-- Gambar Utama -->
    <div>

        <img src="{{ asset('asset/img/sejarah.jpg') }}" alt="wisudawan" class="w-100 img-fluid" style="max-height: 700px; object-fit: cover;">
    </div>

    <!-- Header Section -->
    <div class="d-flex justify-content-center p-4">
        <h1 class="fw-bold text-center">SEJARAH</h1>
    </div>

    <!-- Konten Sejarah -->
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white p-5 rounded-4 shadow-lg" style="font-size: 18px; line-height: 1.8; text-align: justify;">
                    <p>{!! $sejarah->sejarah !!}</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
@endsection