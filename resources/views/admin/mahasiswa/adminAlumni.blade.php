@extends('admin.menu.adminMenu')

@section('section')
    <br>
    <a href="/admin/addAlumni"><button type="button" class="btn btn-success">Tambah Alumni</button></a>
    <br><br>

    <div class="row">
        <div class="col-4 py-5 px-5">
            <form action="{{ route('filter.AdminAlumni') }}" method="GET">
                @csrf
                <div class="row">
                    <label for="searchby" class="py-2">Pilih Kategori</label>
                    <div class="col-4">
                        <select name="searchby" id="searchby" class="form-select form-select-sm"
                            aria-label=".form-select-sm example" onchange="dependent('searchby', 'searchvalue')">
                            <option value="">Semua</option>
                            <option value="angkatan">Angkatan</option>
                        </select>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-8">
                                <select name="searchvalue" id="searchvalue" class="form-select form-select-sm"
                                    aria-label=".form-select-sm example"></select>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary">Terapkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-5 mx-5" style="border-radius:20px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">SK Yudisium</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($alumni->isEmpty())
                    <tr>
                        <td colspan="7">Data alumni tidak ditemukan.</td>
                    </tr>
                @else
                    @foreach ($alumni as $item)
                        <tr>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->tahun_lulus }}</td>
                            <td>{{ $item->sk_yudisium }}</td>
                            <td class="d-flex">
                                <a href="/admin/editAlumni/{{ $item->id }}"><button type="button"
                                        class="btn btn-primary mx-1">Edit</button></a>

                                <!-- Tombol hapus dengan konfirmasi -->
                                <form action="/admin/hapusAlumni/{{ $item->id }}" method="POST"
                                    onsubmit="return confirmDelete(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-1">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $alumni->appends(request()->query())->links() }}
    </div>

    <a href="/alumni" target="_blank"><button type="button" class="btn btn-success mx-1">Lihat Pratinjau</button></a>

    <script>
        // Fungsi untuk konfirmasi penghapusan
        function confirmDelete(event) {
            const confirmed = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (!confirmed) {
                event.preventDefault(); // Batalkan pengiriman form jika pengguna memilih "Batal"
            }
            return confirmed;
        }

        function dependent(e1, e2) {
            const s1 = document.getElementById(e1);
            const s2 = document.getElementById(e2);

            s2.innerHTML = "";

            let options = [];

            if (s1.value === "angkatan") {
                options = @json($angkatan->pluck('angkatan'));
            } else if (s1.value === "status") {
                options = @json($status->pluck('status'));
            }

            options.forEach(option => {
                const newOption = document.createElement("option");
                newOption.value = option;
                newOption.text = option;
                s2.add(newOption);
            });
        }
    </script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
