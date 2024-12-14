@extends('master')

@section('section')
<br><br>
<h1 class="text-dark container text-center"><b>Dosen Informatika</b></h1>
<br><br>

<section>
    <div class="serv text-body">
        <div class="row">
            @foreach ($dosen as $item)
            @if ($item->status != "Tidak Aktif")
            <div class="col-md-4 col-sm-6 col-12 mb-4 d-flex justify-content-center ">
                <p href="/staffDosen/{{ $item->id }}" class="card-link text-decoration-none">
                    <div class="card m-2" style="width: 18rem; height: 15rem; background-color: #f8f9fa;">
                        <div class="text-center mt-3">
                            <img class="gbrDosen img-fluid rounded-circle" src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                            <p class="text-center dosen-name mt-3" style="color:black "><strong>{{ $item->nama }}</strong></p>
                            
                            <a href="/staffDosen/{{ $item->id }}" class="btn btn-primary btn-sm" style="border-radius: 20px; background-color: #0079c2; border: none;">View Profile</a>
                        </div>
                    </div>
                </p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

@endsection
