@extends('admin.menu.adminMenu')


@section('section')

    <div class="container">

        <h1>Edit Kompetisi</h1>
        <form action="/admin/editParticipant/proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="text" class="form-control" name="id" value="{{ $participant->id }}" hidden>

            <label class="form-label">Nim</label>
            <input type="text" class="form-control" name="nim" value="{{ $participant->nama }}">

            <br><br>

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $participant->tanggal }}">

            <br><br>

            <label class="form-label">Prestasi</label>
            <input type="text" class="form-control" name="prestasi" value="{{ $participant->penyelenggara }}">

            <br><br>

            <label class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3">{{ $participant->keterangan }}</textarea>

            <br><br>

            <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $participant->gambar) }}"
                    alt="{{ $participant->gambar }}" style="width: 100%">
            </div>

            <div class="form-group">
                <b>File Gambar</b><br />
                <input type="file" name="file">
            </div><br>
            <br>

            <input type="submit" value="Edit Participant" class="btn btn-primary">
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
