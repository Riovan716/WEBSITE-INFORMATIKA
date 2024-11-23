@extends('admin.menu.adminMenu')

@section('section')
<div class="container">
    <h1>Edit Participant</h1>
    <h4>Kompetisi: {{ $kompetisi->nama ?? 'Kompetisi Tidak Ditemukan' }}</h4>

    <form action="{{ route('admin.editParticipantProses', $participant->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" value="{{ $participant->nim }}" required>
    
        <br><br>

        <label class="form-label">Nama Kontestan</label>
        <input type="text" class="form-control" name="nama" value="{{ $participant->nama }}">

        <br><br>

        <label class="form-label">Prestasi</label>
        <input type="text" class="form-control" name="prestasi" value="{{ $participant->prestasi }}">

        <br><br>

        <label class="form-label">Keterangan</label>
        <textarea class="form-control" name="keterangan" rows="3">{{ $participant->keterangan }}</textarea>

        <br><br>

        <label class="form-label">Gambar Saat Ini</label><br>
        @if ($participant->gambar)
            <img src="{{ asset('asset/img/Participants/' . $participant->gambar) }}" alt="Gambar" width="150">
        @else
            <p>Tidak ada gambar</p>
        @endif
        <br><br>

        <label class="form-label">Upload Gambar Baru</label>
        <input type="file" class="form-control" name="file">

        <br><br>
        <input type="submit" value="Perbarui Participant" class="btn btn-primary">
    </form>
</div>
@endsection
