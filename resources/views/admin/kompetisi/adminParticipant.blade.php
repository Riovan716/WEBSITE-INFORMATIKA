@extends('admin.menu.adminMenu')

@section('section')
    <div class="container">
        <h1>Tambah Participant</h1>
        <form action="/admin/addParticipant_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="kompetisi_id" value="{{ $kompetisi->id }}">

            <!-- Field Nim -->
            <label class="form-label">Nim</label>
            <input type="text" class="form-control" name="nim" id="nim">

            <!-- Pesan Error untuk Nim -->
            @if ($errors->has('nim'))
                <div class="alert alert-danger">{{ $errors->first('nim') }}</div>
            @endif

            <br><br>

            <!-- Field Nama Kontestan -->
            <label class="form-label">Nama Kontestan</label>
            <input type="text" class="form-control" name="nama" id="nama">

            <!-- Pesan Error untuk Nama -->
            @if ($errors->has('nama'))
                <div class="alert alert-danger">{{ $errors->first('nama') }}</div>
            @endif

            <br><br>

            <!-- Field Prestasi -->
            <label class="form-label">Prestasi</label>
            <select class="form-control" name="prestasi">
                <option value="juara_1">Juara 1</option>
                <option value="juara_2">Juara 2</option>
                <option value="juara_3">Juara 3</option>
                <option value="anggota">Participant</option>
            </select>

            <br><br>

            <!-- Field Keterangan -->
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3"></textarea>

            <br><br>

            <!-- Field File Gambar -->
            <b>File Gambar</b><br />
            <input type="file" name="file">
            <br><br>

            <input type="submit" value="Tambah Participant" class="btn btn-primary">
        </form>

        <br>
        
        <!-- Menampilkan error validasi -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika NIM berubah
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
                                $('#nama').val('');  // Kosongkan Nama jika NIM tidak ditemuka
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
