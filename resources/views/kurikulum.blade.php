@extends('master')

@section('section')

    <head>
        <link rel="stylesheet" href="path/to/your/custom.css">
        <style>
            .mx-6 {
                margin-left: 15rem !important;
                margin-right: 0rem !important;
            }

            .semester-section {
                margin-bottom: 2rem;
            }

            .semester-section h2 {
                color: #007bff;
                font-weight: bold;
            }

            .table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0 10px;
            }

            .table th,
            .table td {
                padding: 0.75rem 1rem;
                text-align: left;
                white-space: nowrap;
            }

            .table th {
                font-weight: bold;
                color: #007bff;
            }

            .table tbody tr {
                background-color: #f8f9fa;
                border-radius: 8px;
            }

            .table tbody tr td {
                border-top: 1px solid #dee2e6;
            }

            .table th:nth-child(1),
            .table td:nth-child(1) {
                width: 15%;
            }

            .table th:nth-child(2),
            .table td:nth-child(2) {
                width: 50%;
            }

            .table th:nth-child(3),
            .table td:nth-child(3) {
                width: 15%;
            }

            .table th:nth-child(4),
            .table td:nth-child(4) {
                width: 15%;
            }

            .dropdown-wrapper {
                position: relative;
            }

            select.form-control {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"><polygon points="0,0 10,0 5,7" style="fill:%23000;" /></svg>');
                background-repeat: no-repeat;
                background-position: right 10px center;
                background-size: 10px 10px;
                padding-right: 30px;
            }
        </style>
    </head>

    <section class="text">
        <h1 class="text text-center" style="font-size: 3em;">
            <br>
            <b>Struktur Kurikulum <br> Program Studi Informatika</b>
        </h1>
        <div class="container mt-5">
            <form id="formFilterByYear" method="GET" action="{{ url()->current() }}">
                <div class="form-row">
                    <div class="form-group col-md-4 m-2">
                        <label for="tahun">Tahun Kurikulum</label>
                        <div class="dropdown-wrapper">
                            <select name="tahun" id="tahun" class="form-control"
                                onchange="document.getElementById('formFilterByYear').submit();">
                                <option disabled {{ empty(request()->get('tahun')) ? 'selected' : '' }}>Pilih Tahun</option>
                                @foreach ($tahun_kurikulum as $tahun)
                                    <option {{ $defaultYear == $tahun->tahun ? 'selected' : '' }}
                                        value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <br>
        <div class="container">
            @if ($kurikulum->isEmpty())
                <div class="alert alert-warning">
                    <strong>Data tidak ditemukan!</strong> Tidak ada mata kuliah untuk tahun {{ $defaultYear }}.
                </div>
            @else
                @for ($i = 1; $i <= 8; $i++)
                    <div class="semester-section">
                        <h2>Semester {{ $i }}</h2>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Mata Kuliah</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kurikulum as $k)
                                    @if ($k->semester == $i)
                                        <tr>
                                            <td>{{ $k->kode }}</td>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->semester }}</td>
                                            <td>{{ $k->sks }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endfor
            @endif
        </div>
    </section>
@endsection
