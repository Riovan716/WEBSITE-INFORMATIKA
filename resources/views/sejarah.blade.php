@extends('master')

@section('section')
<section>
    <!-- Gambar Utama -->
    <div>

        <img src="{{ asset('asset/img/sejarah.jpg') }}" alt="wisudawan" class="w-100 img-fluid" style="max-height: 700px; object-fit: cover;">
    </div>
    <!-- Konten Sejarah -->
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-12">
                <fieldset class="border border-primary rounded-3 p-4 bg-white p-5 rounded-4 shadow-lg">
                    <legend class="float-none w-100 text-white rounded py-3 px-4"
                    style="background: linear-gradient(90deg, rgba(0, 51, 102, 1) 0%, rgba(0, 153, 255, 1) 100%);">
                    SEJARAH
                </legend>
                <div class="bg-white" style="font-size: 18px; line-height: 1.8; text-align: justify;">
                    <p>{!! $sejarah->sejarah !!}</p>
                </div>
                </fieldset>
            </div>
        </div>
    </div>

    
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
@endsection