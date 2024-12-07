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
                @for ($i = 2014; $i <= now()->year; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor

            </select>

            <br>

            <br><br>
            <label class="form-label">Tahun Lulus</label> <br>
            <select name="tahun_lulus" id="tahun_lulus">
                @for ($i = 2018; $i <= now()->year + 2; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
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
