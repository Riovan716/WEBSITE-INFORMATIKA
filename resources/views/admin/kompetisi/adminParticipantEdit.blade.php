@extends('admin.menu.adminMenu')

@section('section')
<div class="container">
    <h1>Edit Participant</h1>
    <h4>Kompetisi: {{ $kompetisi->nama ?? 'Kompetisi Tidak Ditemukan' }}</h4>

    <form action="{{ route('admin.editParticipantProses', $participant->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" value="{{ $participant->nim }}" id="nim" required>
    
        <br><br>

        <label class="form-label">Nama Kontestan</label>
        <input type="text" class="form-control" name="nama" value="{{ $participant->nama }}" id="nama">

        <br><br>

        <label class="form-label">Prestasi</label>
        <select class="form-control" name="prestasi">
            <option value="Juara 1">Juara 1</option>
            <option value="Juara 2">Juara 2</option>
            <option value="Juara 3">Juara 3</option>
            <option value="Finalis">Finalis</option>
            <option value="Participant">Participant</option>
        </select>
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

    {{-- Menampilkan error validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>
    <a href="{{ route('admin.viewParticipant', ['kompetisi_id' => $kompetisi->id]) }}">
        <button type="button" class="btn btn-danger">Kembali</button>
    </a> 
</div>

@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Ketika NIM diubah
            $('#nim').on('input', function() {
                var nim = $(this).val();

                if (nim.length >= 3) {  // Minimal 3 karakter NIM
                    $.ajax({
                        url: '{{ route('getNamaByNim', '') }}/' + nim,
                        method: 'GET',
                        success: function(response) {
                            if (response.status === 'success') {
                                $('#nama').val(response.nama);  // Mengisi Nama berdasarkan NIM
                            } else {
                                $('#nama').val('');  // Kosongkan Nama jika NIM tidak ditemukan
                            }
                        },
                        error: function() {
                            alert('Terjadi kesalahan saat mengambil data.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
