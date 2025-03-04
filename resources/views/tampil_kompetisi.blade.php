@extends('master')

@section('section')

    
        <h1 class=" container text-body"><b>{{$kompetisi->nama}}</b></h1>
        <br>

        <div class="container p-3 text-dark rounded-4   " style="background: rgba(255, 255, 255, 0.5);">
            <p><b>Tanggal Kegiatan</b></p>
            <p>{{$kompetisi->tanggal}}</p>

            <p><b>Penyelenggara</b></p>
            <p>{{$kompetisi->penyelenggara}}</p>

            <p><b>Keterangan</b></p>
            <p>{{$kompetisi->keterangan}}</p>

            <p><b>Brosur</b></p>
            <img src="{{ asset('asset/img/Kompetisi/' . $kompetisi->gambar) }}" alt="" style="max-height: 300px; max-width:300px">

            <br><br>
            <p><b>Link Lebih Lanjut</b></p>
            <a href="{{$kompetisi->link}}">{{$kompetisi->link}}</a>
            <br> <br><br>

            <a href="{{ route('viewParticipant', ['kompetisi_id' => $kompetisi->id]) }}">
                <button type="button" class="btn btn-warning">Lihat Participants</button>
            </a> 
        </div>
    <br><br>

@endsection
