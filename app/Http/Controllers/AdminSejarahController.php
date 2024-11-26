<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use Illuminate\Support\Facades\DB;

class AdminSejarahController extends Controller
{
    // Fungsi untuk menampilkan halaman sejarah
    public function showSejarah()
    {
        $data = Sejarah::first(); // Mengambil data sejarah dari database
        return view('admin.sejarah.show', compact('data')); // Mengembalikan view 'show' untuk menampilkan data
    }

    // Fungsi untuk menampilkan halaman edit sejarah
    public function editSejarah()
    {
        $data = Sejarah::first(); // Mengambil data sejarah dari database
        return view('admin.sejarah.adminSejarahEdit', compact('data')); // Mengembalikan view 'edit' dengan data sejarah
    }

    // Fungsi untuk memproses update sejarah
    public function editSejarahProses(Request $request)
    {
        // Validasi input sejarah
        $request->validate([
            'sejarah' => 'required|string',
        ]);

        $update = DB::table('sejarah')->update([
            'sejarah' => $request->sejarah,
        ]);

        if ($update) {
            return redirect(url('admin/visiMisi'))->with('success', 'Data berhasil diubah');
        }
        return redirect(url('admin/editSejarah'))->with('error', 'Data gagal diubah');
        // // Simpan perubahan
        // try {
        //     // Mengambil data sejarah, jika tidak ada, maka buat yang baru
        //     $data = Sejarah::first();
        //     if (!$data) {
        //         $data = new Sejarah();
        //     }

        //     // Mengupdate data sejarah dengan input dari user
        //     $data->sejarah = $request->input('sejarah');
        //     $data->save(); // Menyimpan data ke database

        //     // Redirect kembali ke halaman sejarah dengan pesan sukses
        //     return redirect()->route('admin.sejarah')->with('success', 'Sejarah berhasil diperbarui.');
        // } catch (\Exception $e) {
        //     // Redirect kembali dengan pesan error jika terjadi kesalahan
        //     return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan perubahan.');
        // }
    }
}
