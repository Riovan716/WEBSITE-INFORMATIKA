@extends('master')

@section('title', 'Daftar Peserta')

@section('section')
<div class="container mt-4">

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prestasi</th>
                <th>Keterangan</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($participants as $participant)
                <tr>
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
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data peserta</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
