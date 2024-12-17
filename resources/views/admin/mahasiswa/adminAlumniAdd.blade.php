@extends('admin.menu.adminMenu')

@section('section')

    <div class="container">

        <h1>Tambah Alumni</h1>
        <form action="/addAlumni_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" onkeyup="fetchNama()">

            <br><br>

            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" readonly>

            <br><br>

            <label class="form-label">Angkatan</label><br>
            <select name="angkatan" id="angkatan">
                @for ($i = 2014; $i <= now()->year; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <br><br>

            <label class="form-label">Tahun Lulus</label> <br>
            <select name="tahun_lulus" id="tahun_lulus">
                @for ($i = 2018; $i <= now()->year + 2; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <br><br>

            <label class="form-label mt-3">SK Yudisium</label>
            <input type="text" class="form-control" name="sk_yudisium">

            <br>

            <input type="submit" value="Tambah Alumni" class="btn btn-primary">
        </form>

        <br>
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

    <script>
        function fetchNama() {
            let nim = document.getElementById('nim').value;

            if (nim.length > 0) {
                fetch(`/getNamaByNim?nim=${nim}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('nama').value = data.nama;
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                document.getElementById('nama').value = '';
            }
        }
    </script>

@endsection
