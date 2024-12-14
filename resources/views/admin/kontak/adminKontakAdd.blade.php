@extends('admin.menu.adminMenu')

@section('section')
    <h3>Tambah Data Kontak</h3>
    <form action="/admin/addKontak/proses" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required>
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Masukkan Kode Pos" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Tambah Data</button>
    </form>
@endsection