@extends('admin.menu.adminMenu')

@section('section')

    <div class="container">

        <h1>Edit Organisasi</h1>
        <form action="/admin/editOrganisasi_proses" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        
            <input type="text" class="form-control" name="id" value="{{ $organisasi->id }}" hidden>
            
            <!-- Tambahkan hidden input untuk tahun -->
            <input type="hidden" class="form-control" name="tahun" value="{{ request('tahun', $organisasi->tahun) }}">
        
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $organisasi->nama }}">
            </div>
        
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Anggota</label><br />
                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                @if ($organisasi->gambar)
                    <img id="preview" class="gbrOrganisasi w-50 mt-2"
                        src="{{ asset('asset/img/Organisasi/' . $organisasi->gambar) }}" alt="{{ $organisasi->gambar }} "
                        style="display: block;">
                @else
                    <img id="preview" class="gbrOrganisasi w-50 mt-2" src="" alt="Preview"
                        style="display: none;">
                @endif
            </div>
        
            <div class="mb-3">
                <label for="divisi" class="form-label">Divisi</label>
                <select class="form-control" id="divisi" name="divisi" required>
                    <option value="Pembina" @if ($organisasi->divisi == 'Pembina') selected @endif>Pembina</option>
                    <option value="MPH" @if ($organisasi->divisi == 'MPH') selected @endif>MPH</option>
                    <option value="BPH" @if ($organisasi->divisi == 'BPH') selected @endif>BPH</option>
                    <option value="Danus" @if ($organisasi->divisi == 'Danus') selected @endif>Danus</option>
                    <option value="Humas" @if ($organisasi->divisi == 'Humas') selected @endif>Humas</option>
                    <option value="Kominfo" @if ($organisasi->divisi == 'Kominfo') selected @endif>Kominfo</option>
                    <option value="Minat" @if ($organisasi->divisi == 'Minat') selected @endif>Minat</option>
                    <option value="Pendidikan" @if ($organisasi->divisi == 'Pendidikan') selected @endif>Pendidikan</option>
                    <option value="Ristek" @if ($organisasi->divisi == 'Ristek') selected @endif>Ristek</option>
                </select>
            </div>
        
            <!-- Dropdown Jabatan -->
            <div class="form-group" id="jabatan-div">
                <label for="jabatan">Jabatan:</label>
                <select class="form-control" id="jabatan" name="jabatan" required>
                    <!-- Opsi jabatan akan diubah dengan AJAX -->
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Edit Data Anggota</button>
        </form>

        <br>

        {{-- Menampilkan error validasi --}}
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
    
        document.getElementById('divisi').addEventListener('change', function () {
    var divisi = this.value;
    var jabatanSelect = document.getElementById('jabatan');
    var hiddenJabatanInput = document.getElementById('hidden-jabatan');
    var jabatanLabel = document.querySelector('label[for="jabatan"]');
    var jabatanDiv = document.getElementById('jabatan');

    // Set default jabatan options
    var jabatanOptions = {
        'Pembina': ['Pembina'],
        'MPH': ['MPH', 'Wakil MPH'],
        'BPH': ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Wakil Sekretaris', 'Bendahara', 'Wakil Bendahara'],
        'Danus': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
        'Humas': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
        'Kominfo': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
        'Minat': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
        'Pendidikan': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota'],
        'Ristek': ['Kepala Divisi', 'Wakil Kepala Divisi', 'Anggota']
    };

    // Clear existing jabatan options
    jabatanSelect.innerHTML = '';

    // Populate jabatan options based on selected divisi
    var jabatanList = jabatanOptions[divisi] || [];
    jabatanList.forEach(function (jabatan) {
        var option = document.createElement('option');
        option.value = jabatan;
        option.textContent = jabatan;
        jabatanSelect.appendChild(option);
    });

    // Tampilkan atau sembunyikan dropdown jabatan
    if (divisi === 'Pembina') {
        jabatanLabel.style.display = 'none';
        jabatanDiv.style.display = 'none';

        // Isi input hidden dengan nilai jabatan default
        hiddenJabatanInput.value = divisi;
    } else {
        jabatanLabel.style.display = 'block';
        jabatanDiv.style.display = 'block';

        // Isi input hidden dengan nilai pertama dropdown (default)
        hiddenJabatanInput.value = jabatanList[0] || '';
    }

    // Perbarui nilai hidden input jika dropdown berubah
    jabatanSelect.addEventListener('change', function () {
        hiddenJabatanInput.value = this.value;
    });

    // Set nilai default hidden input dari dropdown saat load awal
    hiddenJabatanInput.value = jabatanSelect.value;
});

// Trigger event change saat halaman pertama kali dimuat
document.getElementById('divisi').dispatchEvent(new Event('change'));

    </script>
    
@endsection
