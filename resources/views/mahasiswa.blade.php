@extends('master')

@section('section')
    <style>
        /* CSS untuk halaman mahasiswa */
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .text-center {
            text-align: center;
        }

        .form-select-sm {
            border-radius: 0.375rem;
            padding: 0.375rem 0.75rem;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .table th,
        .table td {
            padding: 12px;
            border: 2px solid #dee2e6;
            text-align: center;
        }

        .table th {
            background-color: #0b4582;
            color: #ffffff;
            text-transform: uppercase;
        }

        .table tbody tr {
            background-color: #f8f9fa;
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .pagination {
            justify-content: center;
        }

        .form-inline {
            display: flex;
            align-items: center;
        }

        .form-inline select {
            margin-right: 10px;
        }

        .col-4 {
            max-width: 100%;
        }
    </style>

    <br>
    <h1 class="text-dark container text-center"><b>Daftar Mahasiswa Informatika Institut Teknologi Del</b></h1>
    <br>

    <div class="row">
        <div class="col-4 py-5 px-5">
            <form action="{{ route('filter.mahasiswa') }}" method="GET" class="form-inline">
                @csrf
                <div class="row">
                    <label for="searchby" class="py-2">Pilih Kategori</label>
                    <div class="col-4">
                        <select name="searchby" id="searchby" class="form-select form-select-sm"
                            aria-label=".form-select-sm example" onchange="dependent('searchby', 'searchvalue')">
                            <option value="">Semua</option>
                            <option value="angkatan">Angkatan</option>
                            <option value="status">Status</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="searchvalue" id="searchvalue" class="form-select form-select-sm"
                            aria-label=".form-select-sm example"></select>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" type="submit">Terapkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-5 mx-5" style="border-radius:20px; background-color:transparent;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            {{ $mahasiswa->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script>
        function dependent(e1, e2) {
            var s1 = document.getElementById(e1);
            var s2 = document.getElementById(e2);
            var optionarr = [];

            s2.innerHTML = "";

            if (s1.value == 'angkatan') {
                var optionarr = [
                    @if (@isset($angkatan) & (sizeof($angkatan) > 0))
                        @foreach ($angkatan as $akt)
                            '{{ $akt->angkatan }}|{{ $akt->angkatan }}',
                        @endforeach
                    @endif
                ];
            } else if (s1.value == 'status') {
                var optionarr = [
                    @if (@isset($status) & (sizeof($status) > 0))
                        @foreach ($status as $sts)
                            @if ($sts->status != 'Tidak Aktif')
                                '{{ $sts->status }}|{{ $sts->status }}',
                            @endif
                        @endforeach
                    @endif
                ];
            }

            for (var option in optionarr) {
                var pair = optionarr[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                s2.options.add(newoption);
            }
        }

        window.onload = function() {
            dependent('searchby', 'searchvalue');
        }
    </script>
@endsection
