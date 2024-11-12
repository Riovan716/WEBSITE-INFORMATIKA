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
                /* Warna biru untuk judul semester */
                font-weight: bold;
            }

            .table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0 10px;
                /* Jarak antara baris */
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

            /* Set fixed widths for each column */
            .table th:nth-child(1),
            .table td:nth-child(1) {
                width: 15%;
            }

            /* Kode */
            .table th:nth-child(2),
            .table td:nth-child(2) {
                width: 50%;
            }

            /* Nama Mata Kuliah */
            .table th:nth-child(3),
            .table td:nth-child(3) {
                width: 15%;
            }

            /* Semester */
            .table th:nth-child(4),
            .table td:nth-child(4) {
                width: 15%;
            }

            /* SKS */
        </style>
    </head>

    <section class="text-body">
        <h1 class="text-body text-center" style="font-size: 3em;"><b>Struktur Kurikulum <br> Program Studi Informatika</b>
        </h1>
        <div class="container mt-5">
            <form id="formFilterByYear">
                <div class="form-row">
                    <div class="form-group col-md-4 m-2">
                        <label for="tahun">Tahun Kurikulum</label>
                        <select name="tahun" id="tahun" class="form-control"
                            onchange="document.getElementById('formFilterByYear').submit();">
                            <option disabled selected>Pilih Tahun</option>
                            @foreach ($tahun_kurikulum as $tahun)
                                <option {{ request()->get('tahun') == $tahun->tahun ? 'selected' : '' }}
                                    value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 mt-2 mb-4">
                        <label></label>
                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
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
        </div>
    </section>
@endsection
