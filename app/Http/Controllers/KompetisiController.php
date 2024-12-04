<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kompetisi;
use App\Models\Participant;
use App\Models\Mahasiswa;

class KompetisiController extends Controller
{
    public function tampil_kompetisi($id)
    {
        $kompetisi = Kompetisi::where('id', $id)
            ->first();
        return view('tampil_kompetisi', ['kompetisi' => $kompetisi]);
    }

    public function kompetisiAll()
    {
        $kompetisi = Kompetisi::orderBy('id', 'desc')
            ->paginate(3);

        return view('kompetisiAll', ['kompetisi' => $kompetisi]);
    }

    public function showKompetisi()
    {
        $kompetisi = Kompetisi::orderBy('id', 'desc')
            ->get();

        return view('admin.kompetisi.adminKompetisi')->with('kompetisi', $kompetisi);
    }

    public function addKompetisi()
    {
        return view('admin.kompetisi.adminKompetisiAdd');
    }

    public function addKompetisi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
            'links' => 'required',
            'file' => 'required',
        ]);

        $news = Kompetisi::orderBy('id', 'desc')->first();

        // Tentukan ID untuk nama file
        $nextId = $news ? $news->id + 1 : 1;

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $nextId;
        $request->file->move(public_path('asset/img/Kompetisi'), $imageName . '.' . $extension);

        Kompetisi::insert([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'penyelenggara' => $request->penyelenggara,
            'keterangan' => $request->keterangan,
            'link' => $request->links,
            'gambar' => $imageName . '.' . $extension,
        ]);

        return redirect('/admin/kompetisi');
    }


    public function editKompetisi($id)
    {
        $kompetisi = Kompetisi::where('id', $id)
            ->first();

        return view('admin.kompetisi.adminKompetisiEdit')->with('kompetisi', $kompetisi);
    }

    public function editKompetisi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
            'links' => 'required',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $imageExt = $request->file->getClientOriginalName();
            $pathInfo = pathinfo($imageExt);
            $extension = $pathInfo['extension'];

            $imageName = $request->id;
            $request->file->move(public_path('asset/img/Kompetisi'), $imageName . '.' . $extension);

            Kompetisi::where('id', $request->id)
                ->update([
                    'nama' => $request->nama,
                    'tanggal' => $request->tanggal,
                    'penyelenggara' => $request->penyelenggara,
                    'keterangan' => $request->keterangan,
                    'link' => $request->links,
                    'gambar' => $imageName . '.' . $extension,
                ]);
        } else {
            Kompetisi::where('id', $request->id)
                ->update([
                    'nama' => $request->nama,
                    'tanggal' => $request->tanggal,
                    'penyelenggara' => $request->penyelenggara,
                    'keterangan' => $request->keterangan,
                    'link' => $request->links,
                ]);
        }

        return redirect('/admin/kompetisi');
    }


    public function hapusKompetisi($id)
    {
        Kompetisi::where('id', $id)
            ->delete();

        return redirect('/admin/kompetisi');
    }

    //pindah dari kompetisi ke page mau menambah participant

    public function viewParticipant($kompetisiId)
    {
        // Ambil data kompetisi berdasarkan ID
        $kompetisi = Kompetisi::find($kompetisiId);

        // Jika kompetisi tidak ditemukan
        if (!$kompetisi) {
            return redirect()->back()->with('error', 'Kompetisi tidak ditemukan.');
        }

        // Ambil peserta berdasarkan kompetisi_id
        $participants = Participant::where('kompetisi_id', $kompetisiId)->get();

        // Kirim data ke view
        return view('admin.kompetisi.adminParticipantView', compact('kompetisi', 'participants'));
    }


    public function addParticipant($kompetisiId)
    {
        // Ambil data kompetisi berdasarkan ID
        $kompetisi = Kompetisi::findOrFail($kompetisiId);

        // Kirim data kompetisi ke view
        return view('admin.kompetisi.adminParticipant', compact('kompetisi'));
    }


    public function addParticipantProses(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prestasi' => 'required',
            'keterangan' => 'required',
            'kompetisi_id' => 'required|exists:kompetisi,id',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('asset/img/Participants'), $fileName);
        }

        // Simpan data participant
        Participant::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prestasi' => $request->prestasi,
            'keterangan' => $request->keterangan,
            'gambar' => $fileName ?? null,
            'kompetisi_id' => $request->kompetisi_id,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.viewParticipant', ['kompetisi_id' => $request->kompetisi_id])
            ->with('success', 'Participant berhasil ditambahkan!');
    }


    public function hapusParticipant($id)
    {
        // Cari data participant berdasarkan ID
        $participant = Participant::find($id);

        // Jika data tidak ditemukan, redirect dengan pesan error
        if (!$participant) {
            return redirect()->back()->with('error', 'Participant tidak ditemukan.');
        }

        // Hapus data participant
        $participant->delete();

        // Redirect ke halaman peserta dengan pesan sukses
        return redirect()->route('admin.viewParticipant', ['kompetisi_id' => $participant->kompetisi_id])
            ->with('success', 'Participant berhasil dihapus.');
    }



    public function editParticipant($id)
    {
        // Ambil data participant berdasarkan ID
        $participant = Participant::findOrFail($id);

        // Ambil data kompetisi terkait untuk ditampilkan di view (opsional jika diperlukan)
        $kompetisi = Kompetisi::find($participant->kompetisi_id);

        return view('admin.kompetisi.adminParticipantEdit', compact('participant', 'kompetisi'));
    }

    public function editParticipant_proses(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prestasi' => 'required',
            'keterangan' => 'required',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari participant berdasarkan ID
        $participant = Participant::findOrFail($id);

        // Proses upload file baru (jika ada)
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $imageName = $id . '.' . $extension;

            // Pindahkan file ke folder public/asset/img/Participants
            $file->move(public_path('asset/img/Participants'), $imageName);

            // Update data dengan file gambar baru
            $participant->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'prestasi' => $request->prestasi,
                'keterangan' => $request->keterangan,
                'gambar' => $imageName,
            ]);
        } else {
            // Update data tanpa mengubah file gambar
            $participant->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'prestasi' => $request->prestasi,
                'keterangan' => $request->keterangan,
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect()->route('admin.viewParticipant', ['kompetisi_id' => $participant->kompetisi_id])
            ->with('success', 'Data participant berhasil diperbarui.');
    }


    public function Participant($kompetisiId)
    {
        // Ambil data kompetisi berdasarkan ID
        $kompetisi = Kompetisi::find($kompetisiId);

        // Jika kompetisi tidak ditemukan
        if (!$kompetisi) {
            return redirect()->back()->with('error', 'Kompetisi tidak ditemukan.');
        }

        // Ambil peserta berdasarkan kompetisi_id dengan paginasi
        $participants = Participant::where('kompetisi_id', $kompetisiId)->paginate(10);

        // Kirim data ke view
        return view('participant', compact('kompetisi', 'participants'));
    }

    public function getNamaByNim($nim)
    {
        // Mencari mahasiswa berdasarkan NIM
        $mahasiswa = mahasiswa::where('nim', $nim)->first();

        if ($mahasiswa) {
            return response()->json([
                'status' => 'success',
                'nama' => $mahasiswa->nama // Kolom 'nama' dari tabel mahasiswa
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'NIM tidak ditemukan'
            ]);
        }
    }


}
