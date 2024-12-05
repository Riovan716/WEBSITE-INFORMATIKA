<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
  // beranda
  public function showKontak()
  {
    $kontak = Kontak::first(); // Mengambil data kontak pertama
    return view('Kontak', compact('kontak'));
  }


  // Menampilkan admin kontak
  public function adminKontak()
  {
    $kontak = Kontak::latest()->first(); // Mengambil data kontak yang terakhir di-upload
    return view('admin.Kontak.adminKontak', compact('kontak'));
  }

  // Menambah admin kontak
  public function adminKontakAdd()
  {
    $kontak = Kontak::first(); // Mengambil data kontak pertama
    return view('admin.Kontak.adminKontakAdd', compact('kontak'));
  }

  public function adminKontakEdit()
  {
    $kontak = Kontak::first(); // Mengambil data kontak pertama
    return view('admin.Kontak.adminKontakEdit', compact('kontak'));
  }
  public function editKontak_proses(Request $request)
  {
    // Validasi data yang masuk
    $this->validate($request, [
      'email' => 'email|string',
      'instagram' => 'required|string',
      'nomor_telepon' => 'required|string',
      'kode_pos' => 'required|numeric',
    ]);

    // Ambil data kontak pertama (asumsi hanya ada satu data)
    $kontak = Kontak::first();

    if (!$kontak) {
      return redirect('/admin/kontak')->with('error', 'Data kontak tidak ditemukan.');
    }

    // Update data kontak
    $kontak->update([
      'email' => $request->email,
      'instagram' => $request->instagram,
      'nomor_telepon' => $request->nomor_telepon,
      'kode_pos' => $request->kode_pos,
    ]);

    // Redirect ke halaman admin kontak dengan pesan sukses
    return redirect('/admin/kontak')->with('success', 'Data kontak berhasil diperbarui.');
  }


  public function addKontak_proses(Request $request)
  {
    // Validasi input dari form
    $this->validate($request, [
      'email' => 'required|string',
      'instagram' => 'required|string',
      'nomor_telepon' => 'required|string',
      'kode_pos' => 'required|string',
    ]);

    // Menambahkan data ke tabel kontaks
    Kontak::create([
      'email' => $request->email,
      'instagram' => $request->instagram,
      'nomor_telepon' => $request->nomor_telepon,
      'kode_pos' => $request->kode_pos,
    ]);

    // Redirect ke halaman admin/kontak
    return redirect('/admin/kontak')->with('success', 'Kontak berhasil ditambahkan');
  }
  public function deleteKontak_proses($id)
  {
    $kontak = Kontak::find($id);

    // Periksa apakah data kontak ditemukan
    // Hapus semua data kontak
    Kontak::truncate();  // Atau bisa juga menggunakan Kontak::delete();

    // Redirect dengan pesan sukses
    return redirect('/admin/kontak')->with('success', 'Semua kontak berhasil dihapus.');

  }



}