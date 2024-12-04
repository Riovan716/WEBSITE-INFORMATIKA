@extends('admin.menu.adminMenu')


@section('section')

    <div class="container">

        <h1>Tambah Participant</h1>
        <form action="/admin/addParticipant_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="kompetisi_id" value="{{ $kompetisi->id }}">
            <label class="form-label">Nim</label>
            <input type="text" class="form-control" name="nim">

            <br><br>

            <label class="form-label">Nama Kontestan</label>
            <input type="text" class="form-control" name="nama">

            <br><br>

            <label class="form-label">Prestasi</label>
            <select class="form-control" name="prestasi">
                <option value="juara_1">Juara 1</option>
                <option value="juara_2">Juara 2</option>
                <option value="juara_3">Juara 3</option>
                <option value="anggota">Participant</option>
            </select>

            <br><br>

            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3"></textarea>

            
            <br><br>


            <br><br>
            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div>
            <br>
            <br>

            <input type="submit" value="Tambah Participant" class="btn btn-primary">
        </form>

        <br>
        {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection
