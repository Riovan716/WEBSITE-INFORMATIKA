@extends('admin.menu.adminMenu')

@section('section')
<div class="container mt-4">
    @if ($kompetisi)
        <h2>Daftar Participants untuk Kompetisi: {{ $kompetisi->nama }}</h2>
        <a href="{{ route('admin.addParticipant', ['kompetisi_id' => $kompetisi->id]) }}">
            <button type="button" class="btn btn-success">Tambah Participant</button>
        </a>
    @else
        <h2>Kompetisi Tidak Ditemukan</h2>
        <p>Harap pilih kompetisi yang valid untuk melihat atau menambahkan peserta.</p>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prestasi</th>
                <th>Keterangan</th>
                <th>Gambar</th>
                <th>Operasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($participants as $participant)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>

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
                    <td class="d-flex">
                        <a href="/admin/editParticipant/{{ $participant->id }}">
                            <button type="button" class="btn btn-primary mx-1">Edit</button>
                        </a>
                        <a href="{{ route('admin.hapusParticipant', ['id' => $participant->id]) }}">
                            <button type="button" class="btn btn-danger mx-1">Hapus</button>
                        </a>
                        
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data peserta</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
