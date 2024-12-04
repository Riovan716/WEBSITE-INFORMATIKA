@extends('master')

@section('title', 'Daftar Peserta')

@section('section')
<div class="container mt-4">

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prestasi</th>
                <th>Keterangan</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $index => $participant)
                <tr>
                    <!-- Menghitung nomor urut secara manual berdasarkan halaman -->
                    <th scope="row">{{ $participants->firstItem() + $index }}</th>
                    <td>{{ $participant->nim }}</td>
                    <td>{{ $participant->nama }}</td>
                    <td>{{ $participant->prestasi }}</td>
                    <td>{{ $participant->keterangan }}</td>
                    <td>
                        @if($participant->gambar)
                            <img src="{{ asset('asset/img/Participants/' . $participant->gambar) }}" alt="Gambar" width="100">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </td>
                </tr>
            @endforeach
            @if($participants->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Belum ada data peserta</td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- Menampilkan pagination -->
    <div class="d-flex justify-content-center">
        {{ $participants->links() }}
    </div>
</div>
@endsection
