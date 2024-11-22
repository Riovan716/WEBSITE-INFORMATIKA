@extends('admin.menu.adminMenu')

@section('section')
<div class="container mt-4">
    <h2>Daftar Participants</h2>
    <a href="/admin/addParticipant"><button type="button" class="btn btn-warning mx-1">Add Participant</button></a>

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

                    <td class="d-flex">
                      <a href="/admin/editParticipant/{{ $participant->id }}"><button type="button"
                              class="btn btn-primary mx-1">Edit</button></a>
                      <a href="/admin/hapusParticipant/{{ $participant->id }}"><button type="button"
                              class="btn btn-danger mx-1">Hapus</button></a>
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
