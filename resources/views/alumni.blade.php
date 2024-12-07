@extends('master')

@section('section')
    <style>
        /* CSS untuk halaman alumni */
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
    </style>

    <br>
    <h1 class="text-dark container text-center"><b>Daftar Alumni Informatika Institut Teknologi Del</b></h1>
    <br>

    <div class="row">
        <div class="col-4 py-5 px-5">
            <form action="{{ route('alumni') }}" method="GET">
                @csrf
                <div class="row">
                    <label for="searchby" class="py-2">Pilih Kategori</label>
                    <div class="col-4">
                        <select name="searchby" id="searchby" class="form-select form-select-sm"
                            aria-label=".form-select-sm example" onchange="dependent('searchby', 'searchvalue')">
                            <option value="">Semua</option>
                            <option value="tahun_lulus" {{ request('searchby') == 'tahun_lulus' ? 'selected' : '' }}>
                                Tahun Lulus
                            </option>
                        </select>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-8">
                                <select name="searchvalue" id="searchvalue" class="form-select form-select-sm"
                                    aria-label=".form-select-sm example" onchange="this.form.submit()">
                                    <option value="">Pilih...</option>
                                    @foreach ($tahunLulus as $tahun)
                                        <option value="{{ $tahun->tahun_lulus }}"
                                            {{ request('searchvalue') == $tahun->tahun_lulus ? 'selected' : '' }}>
                                            {{ $tahun->tahun_lulus }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">

                                <button class="btn btn-primary" type="submit" style="display: none;">Terapkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-5 mx-5" style="border-radius:20px; background-color:transparent;">
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Tahun Lulus</th>
                    <th>SK Yudisium</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumni as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>{{ $item->tahun_lulus }}</td>
                        <td>{{ $item->sk_yudisium }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            {{ $alumni->links() }}
        </div>
    </div>

    <h4 class="text-dark container text-center"><b>Total Alumni = {{ $jumlahAlumni }} orang</b></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script>
        function dependent(e1, e2) {
            var s1 = document.getElementById(e1);
            var s2 = document.getElementById(e2);
            var optionarr = [];

            s2.innerHTML = ""; // Clear previous options

            if (s1.value == 'angkatan') {
                var optionarr = [
                    @foreach ($angkatan as $akt)
                        '{{ $akt->angkatan }}|{{ $akt->angkatan }}',
                    @endforeach
                ];
            } else if (s1.value == 'tahun_lulus') {
                var optionarr = [
                    @foreach ($tahunLulus as $tahun)
                        '{{ $tahun->tahun_lulus }}|{{ $tahun->tahun_lulus }}',
                    @endforeach
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
    </script>
@endsection
