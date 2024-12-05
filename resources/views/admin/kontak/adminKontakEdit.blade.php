@extends('admin.menu.adminMenu')

@section('section')
    <h3>Edit Data Kontak</h3>
    <form action="/admin/editKontak/proses" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $kontak->email }}" required>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $kontak->instagram }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ $kontak->nomor_telepon }}" required>
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $kontak->kode_pos }}" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
@endsection