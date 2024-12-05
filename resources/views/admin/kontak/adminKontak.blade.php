@extends('admin.menu.adminMenu')

@section('section')
    <br>
    
    @if ($kontak)  <!-- Cek jika ada data kontak -->
    @else
        <!-- Jika belum ada data kontak, tampilkan tombol Tambah Data Kontak -->
        <a href="/admin/addKontak"><button type="button" class="btn btn-success">Tambah Data Kontak</button></a>
    @endif
    
    <br><br>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">E-mail</th>
                <th scope="col">Instagram</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($kontak)
                <tr>
                    <td>{{ $kontak->email }}</td>
                    <td>{{ $kontak->instagram }}</td>
                    <td>{{ $kontak->nomor_telepon }}</td>
                    <td>{{ $kontak->kode_pos }}</td>
                    <td>
                        <a href="/admin/editKontak"><button type="button" class="btn btn-primary mx-1">Edit</button></a>
                        <a href="/admin/hapusKontak/{{ $kontak->id }}"><button type="button" class="btn btn-danger mx-1">Hapus</button></a>
                    </td>
                </tr>
            @else
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data kontak</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
