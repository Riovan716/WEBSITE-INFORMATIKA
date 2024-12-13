@extends('admin.menu.adminMenu')

@section('section')

    <div class="container">

        <h1>Tambah Organisasi</h1>

        <form action="/addOrganisasi_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Dropdown Tahun -->
            <div class="form-group mb-3">
                <label for="tahun">Tahun:</label>
                <select class="form-control" id="tahun" name="tahun" required>
                    <option value="">Pilih Tahun</option>
                    @for ($year = date('Y'); $year >= 2000; $year--)
                        <option value="{{ $year }}">{{ $year }}/{{ $year + 1 }}</option>
                    @endfor
                </select>
            </div>
            

            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Input Foto Profil -->
            <div class="mb-3">
                <label for="gambar" class="form-label">Foto Profil</label>
                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()" required>
                <img id="preview" src="#" alt="Preview"
                    style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none;">
            </div>

            <!-- Dropdown Divisi -->
            <div class="form-group">
                <label for="divisi">Divisi:</label>
                <select class="form-control" id="divisi" name="divisi" required>
                    <option value="">Pilih Divisi</option>
                    <option value="Pembina">Pembina</option>
                    <option value="MPH">MPH</option>
                    <option value="BPH">BPH</option>
                    <option value="Danus">Danus</option>
                    <option value="Humas">Humas</option>
                    <option value="Kominfo">Kominfo</option>
                    <option value="Minat">Minat</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Ristek">Ristek</option>
                </select>
            </div>

            <!-- Dropdown Jabatan -->
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <select class="form-control" id="jabatan" name="jabatan" required>
                    <option value="">Pilih Jabatan</option>
                    <option value="Pembina">Pembina</option>
                    <option value="MPH">MPH</option>
                    <option value="Ketua">Ketua</option>
                    <option value="Wakil Ketua">Wakil Ketua</option>
                    <option value="Sekretaris">Sekretaris</option>
                    <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                    <option value="Bendahara">Bendahara</option>
                    <option value="Wakil Bendahara">Wakil Bendahara</option>
                    <option value="Kepala Divisi">Kepala Divisi</option>
                    <option value="Wakil Kepala Divisi">Wakil Kepala Divisi</option>
                    <option value="Anggota">Anggota</option>
                </select>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
        </form>

        {{-- Menampilkan error validasi --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    <script>
        function previewImage() {
            var preview = document.getElementById('preview');
            var fileInput = document.getElementById('gambar');
            var file = fileInput.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }

        document.getElementById('divisi').addEventListener('change', function() {
        var jabatanLabel = document.querySelector('label[for="jabatan"]'); // Label jabatan
        var jabatanDiv = document.getElementById('jabatan'); // Dropdown jabatan
        var jabatanDivContainer = document.getElementById('jabatan-div'); // Kontainer dari dropdown jabatan

        // Sembunyikan form jabatan dan label jika divisi adalah Pembina atau MPH
        if (this.value === 'Pembina' || this.value === 'MPH') {
            jabatanLabel.style.display = 'none';  // Menyembunyikan label jabatan
            jabatanDiv.style.display = 'none';    // Menyembunyikan dropdown jabatan
        } else {
            jabatanLabel.style.display = 'block'; // Menampilkan label jabatan
            jabatanDiv.style.display = 'block';   // Menampilkan dropdown jabatan
        }
    });

    // Trigger change event saat halaman pertama kali dimuat
    document.getElementById('divisi').dispatchEvent(new Event('change'));
          // Event listener untuk dropdown Divisi
        // Event listener untuk dropdown Divisi
        document.getElementById('divisi').addEventListener('change', function() {
            var jabatanSelect = document.getElementById('jabatan');
            jabatanSelect.innerHTML = '';  // Clear jabatan options

            // Get the selected divisi
            var selectedDivisi = this.value;

            // Define jabatan options based on divisi
            var jabatanOptions = {
                'Pembina': ['Pembina'],
                'MPH': ['MPH'],
                'BPH': ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Wakil Sekretaris', 'Bendahara', 'Wakil Bendahara'],
                'Danus': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
                'Humas': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
                'Kominfo': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
                'Minat': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
                'Pendidikan': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
                'Ristek': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota']
            };

            // Populate jabatan based on selected divisi
            if (jabatanOptions[selectedDivisi]) {
                jabatanOptions[selectedDivisi].forEach(function(jabatan) {
                    var option = document.createElement('option');
                    option.value = jabatan;
                    option.textContent = jabatan;
                    jabatanSelect.appendChild(option);
                });
            } else {
                var option = document.createElement('option');
                option.value = '';
                option.textContent = 'Pilih Jabatan';
                jabatanSelect.appendChild(option);
            }
        });

    </script>

@endsection
