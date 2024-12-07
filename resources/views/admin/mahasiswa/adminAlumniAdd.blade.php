@extends('admin.menu.adminMenu')

@section('section')

    <div class="container">

        <h1>Tambah Alumni</h1>
        <form action="/addAlumni_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim">

            <br><br>

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">

            <br><br>

            <label class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan">
                @for ($i = 2000; $i <= now()->year; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <br><br>

            <label class="form-label">Tahun Lulus</label>
            <select name="tahun_lulus" id="tahun_lulus">
                @for ($i = 2000; $i <= now()->year + 2; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <br>

            <label class="form-label mt-3">SK Yudisium</label>
            <input type="text" class="form-control" name="sk_yudisium">


            <br>

            <input type="submit" value="Tambah Alumni" class="btn btn-primary">
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
