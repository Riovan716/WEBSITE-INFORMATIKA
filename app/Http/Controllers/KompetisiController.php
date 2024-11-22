<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kompetisi;
use App\Models\Participant;

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

    public function viewParticipant(Request $request)
    {
        // Ambil kompetisi dari query string
        $kompetisi = $request->get('kompetisi');

        // Filter data berdasarkan kompetisi
        if ($kompetisi) {
            $participants = Participant::where('kompetisi', $kompetisi)->get();
        } else {
            $participants = Participant::all(); // Tampilkan semua jika tidak ada filter
        }

        // Kirim data ke view
        return view('admin.kompetisi.adminParticipantView', compact('participants', 'kompetisi'));
    }



    public function addParticipant()
    {
        return view('admin.kompetisi.adminParticipant');
    }


    public function addParticipant_proses(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prestasi' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cek file dan proses upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $latestEntry = Participant::orderBy('id', 'desc')->first();
            $nextId = $latestEntry ? $latestEntry->id + 1 : 1;

            $extension = $file->getClientOriginalExtension();
            $imageName = $nextId . '.' . $extension;

            // Pindahkan file ke folder public/asset/img/Participants
            $file->move(public_path('asset/img/Participants'), $imageName);
        } else {
            return back()->withErrors('File gambar tidak ditemukan.');
        }

        // Simpan data ke tabel participants
        Participant::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prestasi' => $request->prestasi,
            'keterangan' => $request->keterangan,
            'gambar' => $imageName,
        ]);

        // Redirect dengan pesan sukses
        return redirect('/admin/viewParticipant')->with('success', 'Data berhasil ditambahkan.');
    }

    public function hapusParticipant($id)
    {
        Participant::where('id', $id)
            ->delete();

        return redirect('/admin/viewParticipant');
    }


    public function editParticipant($id)
    {
        $participant = Participant::where('id', $id)
            ->first();

        return view('admin.kompetisi.adminParticipantEdit')->with('participant', $participant);
    }

    public function editParticipant_proses(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prestasi' => 'required',
            'keterangan' => 'required',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // File opsional
        ]);

        // Proses update data
        $participant = Participant::findOrFail($request->id); // Cari peserta berdasarkan ID

        if ($request->hasFile('file')) {
            // Proses upload file baru
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $imageName = $request->id . '.' . $extension;

            // Pindahkan file ke folder public/asset/img/Participants
            $file->move(public_path('asset/img/Participants'), $imageName);

            // Update data dengan file gambar baru
            $participant->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'prestasi' => $request->prestasi,
                'keterangan' => $request->keterangan,
                'gambar' => $imageName, // Update gambar dengan nama baru
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
        return redirect('/admin/viewParticipant')->with('success', 'Data berhasil diperbarui.');
    }

}
