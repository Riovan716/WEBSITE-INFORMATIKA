<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function organisasi(Request $request)
    {
        $tahun = $request->input('tahun');

        if ($tahun) {
            $organisasi = Organisasi::where('tahun', $tahun)->get();
        } else {
            $organisasi = Organisasi::where('tahun', 2024)->get(); // Default data untuk 2024
        }

        $tahunList = Organisasi::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        return view('organisasi')->with([
            'organisasi' => $organisasi,
            'tahunList' => $tahunList,
            'tahun' => $tahun, // Default null atau tahun yang dipilih
        ]);
    }



    public function adminOrganisasi(Request $request)
    {
        // Ambil tahun dari URL atau default ke tahun terbaru jika tidak ada
        $tahun = $request->input('tahun', Organisasi::max('tahun')); // Mengambil tahun terakhir yang ada di database

        // Filter data berdasarkan tahun
        $organisasi = Organisasi::where('tahun', $tahun)->get();

        // Ambil daftar tahun unik untuk dropdown
        $tahunList = Organisasi::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        return view('admin.organisasi.adminOrganisasi')->with([
            'organisasi' => $organisasi,
            'tahunList' => $tahunList,
            'tahun' => $tahun,
        ]);
    }




    public function addOrganisasi()
    {
        return view('admin.organisasi.adminOrganisasiAdd');
    }

    public function addOrganisasi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'jabatan' => 'required',
            'tahun' => 'required|digits:4',  // Validasi inputan tahun (harus 4 digit)
        ]);

        // Menyimpan gambar
        $imageOrganisasiName = $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('asset/img/Organisasi'), $imageOrganisasiName);

        // Menyimpan data organisasi ke database, termasuk kolom 'tahun'
        Organisasi::insert([
            'nama' => $request->nama,
            'gambar' => $request->gambar->getClientOriginalName(),
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan,
            'tahun' => $request->tahun,  // Menambahkan kolom tahun
        ]);

        return redirect('/admin/organisasi');
    }

    public function editOrganisasi($id)
    {
        $organisasi = Organisasi::where('id', $id)->first();
        return view('admin.organisasi.adminOrganisasiEdit')->with('organisasi', $organisasi);
    }

    public function editOrganisasi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg|max:2048', // Gambar tidak wajib diisi
            'divisi' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required|digits:4', // Validasi inputan tahun
        ]);

        // Cari data organisasi berdasarkan ID
        $organisasi = Organisasi::findOrFail($request->id);

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($organisasi->gambar && file_exists(public_path('asset/img/Organisasi/' . $organisasi->gambar))) {
                unlink(public_path('asset/img/Organisasi/' . $organisasi->gambar));
            }

            // Simpan gambar baru
            $imageOrganisasiName = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('asset/img/Organisasi'), $imageOrganisasiName);
            $organisasi->gambar = $imageOrganisasiName; // Update nama file gambar
        }

        // Update data organisasi
        $organisasi->nama = $request->nama;
        $organisasi->divisi = $request->divisi;
        $organisasi->jabatan = $request->jabatan;
        $organisasi->tahun = $request->tahun;
        $organisasi->save();

        return redirect('/admin/organisasi')->with('success', 'Data organisasi berhasil diperbarui.');
    }


    public function hapusOrganisasi($id)
    {
        Organisasi::where('id', $id)
            ->delete();

        return redirect('/admin/organisasi');
    }
}
