@extends('admin.menu.adminMenu')

@section('section')

    <div class="container">

        <h1>Edit Alumni {{ $alumni->nama }}</h1>
        <form action="/admin/editAlumni_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="text" class="form-control" name="id" value="{{ $alumni->id }}" hidden>

            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{ $alumni->nim }}">

            <br><br>

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $alumni->nama }}">

            <br><br>

            <label class="form-label">Angkatan</label> <br>
            <select name="angkatan" id="angkatan">
                <option value="">--- Pilih Angkatan ---</option>
                <option value="2014"{{ $alumni->angkatan == '2014' ? 'selected' : '' }}>2014</option>
                <option value="2015"{{ $alumni->angkatan == '2015' ? 'selected' : '' }}>2015</option>
                <option value="2016"{{ $alumni->angkatan == '2016' ? 'selected' : '' }}>2016</option>
                <option value="2017"{{ $alumni->angkatan == '2017' ? 'selected' : '' }}>2017</option>
                <option value="2018"{{ $alumni->angkatan == '2018' ? 'selected' : '' }}>2018</option>
                <option value="2019"{{ $alumni->angkatan == '2019' ? 'selected' : '' }}>2019</option>
                <option value="2020"{{ $alumni->angkatan == '2020' ? 'selected' : '' }}>2020</option>
                <option value="2021"{{ $alumni->angkatan == '2021' ? 'selected' : '' }}>2021</option>
                <option value="2022"{{ $alumni->angkatan == '2022' ? 'selected' : '' }}>2022</option>
                <option value="2023"{{ $alumni->angkatan == '2023' ? 'selected' : '' }}>2023</option>
                <option value="2024"{{ $alumni->angkatan == '2024' ? 'selected' : '' }}>2024</option>
                <option value="2025"{{ $alumni->angkatan == '2025' ? 'selected' : '' }}>2025</option>
                <option value="2026"{{ $alumni->angkatan == '2026' ? 'selected' : '' }}>2026</option>
            </select>

            <br>

            <br><br>
            <label class="form-label">Tahun Lulus</label> <br>
            <select name="tahun_lulus" id="tahun_lulus">
                <option value="">--- Pilih Tahun Lulus ---</option>
                <option value="2014"{{ $alumni->tahun_lulus == '2014' ? 'selected' : '' }}>2014</option>
                <option value="2015"{{ $alumni->tahun_lulus == '2015' ? 'selected' : '' }}>2015</option>
                <option value="2016"{{ $alumni->tahun_lulus == '2016' ? 'selected' : '' }}>2016</option>
                <option value="2017"{{ $alumni->tahun_lulus == '2017' ? 'selected' : '' }}>2017</option>
                <option value="2018"{{ $alumni->tahun_lulus == '2018' ? 'selected' : '' }}>2018</option>
                <option value="2019"{{ $alumni->tahun_lulus == '2019' ? 'selected' : '' }}>2019</option>
                <option value="2020"{{ $alumni->tahun_lulus == '2020' ? 'selected' : '' }}>2020</option>
                <option value="2021"{{ $alumni->tahun_lulus == '2021' ? 'selected' : '' }}>2021</option>
                <option value="2022"{{ $alumni->tahun_lulus == '2022' ? 'selected' : '' }}>2022</option>
                <option value="2023"{{ $alumni->tahun_lulus == '2023' ? 'selected' : '' }}>2023</option>
                <option value="2024"{{ $alumni->tahun_lulus == '2024' ? 'selected' : '' }}>2024</option>
                <option value="2025"{{ $alumni->tahun_lulus == '2025' ? 'selected' : '' }}>2025</option>
                <option value="2026"{{ $alumni->tahun_lulus == '2026' ? 'selected' : '' }}>2026</option>
                <option value="2026"{{ $alumni->tahun_lulus == '2027' ? 'selected' : '' }}>2027</option>
            </select>
            <br><br>
            <label class="form-label mt-3">SK Yudisium</label>
            <input type="text" class="form-control" name="sk_yudisium" value="{{ $alumni->sk_yudisium }}">

            <br>
            <input type="submit" value="Edit Data Alumni" class="btn btn-primary">
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
