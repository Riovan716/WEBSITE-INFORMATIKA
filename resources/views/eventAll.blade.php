@extends('master')

@section('section')
    <div class="text-light">
        <div class="p-2 ">
            <br>
            <h1 class="text-center mb-4" style="font-family: 'Arial', sans-serif; font-weight: bold; color: #333;">EVENTS</h1>
            <br>
            @foreach ($events as $event)
                <div class="event-card shadow-sm p-4 rounded-3" style="background-color: rgb(255, 255, 255); border-radius: 25px;">
                    <div class="d-flex flex-wrap align-items-center">
                        <div id="tanggal" class="d-flex justify-content-center mb-3 mb-md-0">
                            <p class="p-3" style="background-color: #0079c2; color: #fff; border-radius: 15px; text-align: center;">
                                {{ substr($event->waktu_mulai, 8, 2) }}
                                @if (intval(substr($event->waktu_mulai, 5, 2)) == 1)
                                    Januari
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 2)
                                    Februari
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 3)
                                    Maret
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 4)
                                    April
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 5)
                                    Mei
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 6)
                                    Juni
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 7)
                                    Juli
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 8)
                                    Agustus
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 9)
                                    September
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 10)
                                    Oktober
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 11)
                                    November
                                @elseif (intval(substr($event->waktu_mulai, 5, 2)) == 12)
                                    Desember
                                @endif
                                {{-- tahun --}}
                                <br>
                                {{ substr($event->waktu_mulai, 0, 4) }}
                            </p>
                        </div>
                        <div>
                            <div class="ms-2">
                                <a href="/event/{{ $event->id }}" class="event-link">
                                    <h2 style="color: black;">{{ $event->nama }}</h2>
                                </a>
                                <p style="color: black">{{ $event->deskripsi_singkat }}</p>
                            </div>
                            <hr style="color: black">
                        </div>
                    </div>
                    <hr class="w-75">
                </div>
            @endforeach

            <div style="width: 50%; /* or any other width */
            margin: auto;">
                <br>
                {{ $events->links('custom') }}
            </div>
        </div>
    </div>

    <style>
        /* Tambahkan efek hover pada nama event */
        .event-link h2 {
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .event-link:hover h2 {
            color: #0079c2; /* Warna biru untuk efek hover */
            text-decoration: underline; /* Tambahkan garis bawah saat hover */
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
