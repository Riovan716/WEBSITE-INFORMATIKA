<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    private $filtercategory = '';
    private $filtervalue = '';

    public function mahasiswa()
    {
        $angkatan = Mahasiswa::select('angkatan')
            ->distinct()
            ->get();

        $status = Mahasiswa::select('status')
            ->distinct()
            ->get();

        if ($this->filtercategory == 'angkatan') {
            $mahasiswa = Mahasiswa::where('angkatan', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'angkatan' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == 'status') {
            $mahasiswa = Mahasiswa::where('status', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'status' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == '') {
            $mahasiswa = Mahasiswa::orderBy('nim', 'ASC')
                ->paginate(20);
        }

        $mahasiswa->appends([
            'searchby' => $this->filtercategory,
            'searchvalue' => $this->filtervalue,
        ]);

        // dd($angkatan);
        return view('mahasiswa')
            ->with('data', $mahasiswa)
            ->with('angkatan', $angkatan)
            ->with('status', $status);
    }

    public function adminFilterMahasiswa(Request $request)
    {
        if ($request->searchby == 'angkatan') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == 'status') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == '') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        // dd($this->filtervalue);
        $mahasiswaView = $this->adminMahasiswa();
        return $mahasiswaView;
    }

    public function filterMahasiswa(Request $request)
    {

        if ($request->searchby == 'angkatan') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == 'status') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == '') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        // dd($this->filtervalue);
        $mahasiswaView = $this->mahasiswa();
        return $mahasiswaView;
    }

    public function adminMahasiswa()
    {
        $angkatan = Mahasiswa::select('angkatan')
            ->distinct()
            ->get();

        $status = Mahasiswa::select('status')
            ->distinct()
            ->get();

        if ($this->filtercategory == 'angkatan') {
            $mahasiswa = Mahasiswa::where('angkatan', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'angkatan' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == 'status') {
            $mahasiswa = Mahasiswa::where('status', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'status' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == '') {
            $mahasiswa = Mahasiswa::orderBy('nim', 'ASC')
                ->paginate(20);
        }

        $mahasiswa->appends([
            'searchby' => $this->filtercategory,
            'searchvalue' => $this->filtervalue,
        ]);

        // dd($angkatan);
        return view('admin.mahasiswa.adminMahasiswa')
            ->with('data', $mahasiswa)
            ->with('angkatan', $angkatan)
            ->with('status', $status);
    }

    public function addMahasiswa()
    {
        return view('admin.mahasiswa.adminMahasiswaAdd');
    }

    public function addMahasiswa_proses(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'status' => 'required'
        ]);

        Mahasiswa::insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'status' => $request->status,
        ]);

        return redirect('/admin/mahasiswa');
    }

    public function editMahasiswa($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)
            ->first();

        return view('admin.mahasiswa.adminMahasiswaEdit')->with('mahasiswa', $mahasiswa);
    }

    public function editMahasiswa_proses(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'status' => 'required'
        ]);

        Mahasiswa::where('id', $request->id)
            ->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'angkatan' => $request->angkatan,
                'status' => $request->status,
            ]);

        return redirect('/admin/mahasiswa');
    }

    public function hapusMahasiswa($id)
    {
        Mahasiswa::where('id', $id)
            ->delete();

        return redirect('/admin/mahasiswa');
    }

    // alumni
    public function alumni(Request $request)
    {
        $query = Alumni::where('status', 'lulus');

        $angkatan = Mahasiswa::select('angkatan')->distinct()->get();
        $tahunLulus = Alumni::select('tahun_lulus')->distinct()->orderBy('tahun_lulus', 'ASC')->get();

        if ($request->has('searchby') && $request->searchby == 'tahun_lulus' && $request->has('searchvalue')) {
            $query->where('tahun_lulus', $request->searchvalue);
        }

        if ($request->has('searchby') && $request->searchby == 'angkatan' && $request->has('searchvalue')) {
            $query->where('angkatan', $request->searchvalue);
        }

        $alumni = $query->orderBy('nim', 'ASC')->paginate(20);

        $jumlahAlumni = Alumni::where('status', 'lulus')->count();

        return view('alumni', compact('alumni', 'angkatan', 'tahunLulus', 'jumlahAlumni'));
    }


    public function adminAlumni(Request $request)
    {
        $query = Alumni::where('status', 'lulus');

        if ($request->has('searchby') && $request->searchby != '') {
            $searchby = $request->searchby;
            $searchvalue = $request->searchvalue;

            $query->where($searchby, $searchvalue);
        }

        $alumni = $query->orderBy('nim', 'ASC')->paginate(20);
        $angkatan = Alumni::select('angkatan')->distinct()->get();
        $status = Alumni::select('status')->distinct()->get();
        $tahunLulus = Alumni::select('tahun_lulus')
            ->distinct()
            ->whereNotNull('tahun_lulus') // Tambahkan filter ini untuk menghilangkan null
            ->orderBy('tahun_lulus', 'ASC')
            ->get();

        return view('admin.mahasiswa.adminAlumni', compact('alumni', 'angkatan', 'status', 'tahunLulus'));
    }

    public function showAlumni(Request $request)
    {
        $alumni = Alumni::all();
        $angkatan = Alumni::select('angkatan')->distinct()->get();
        $status = Alumni::select('status')->distinct()->get();


        // Pastikan variabel alumni, angkatan, dan status dipassing ke view
        return view('admin.mahasiswa.adminAlumni', compact('alumni', 'angkatan', 'status'));
    }


    public function adminFilterAlumni(Request $request)
    {
        $query = Alumni::where('status', 'lulus');

        if ($request->filled('searchby') && $request->searchby == 'tahun_lulus' && $request->filled('searchvalue')) {
            $query->where('tahun_lulus', $request->searchvalue);
        }

        if ($request->filled('searchby') && $request->searchby == 'angkatan' && $request->filled('searchvalue')) {
            $query->where('angkatan', $request->searchvalue);
        }

        $alumni = $query->orderBy('nim', 'ASC')->paginate(20);
        $angkatan = Alumni::select('angkatan')->distinct()->get();
        $status = Alumni::select('status')->distinct()->get();
        $tahunLulus = Alumni::select('tahun_lulus')
            ->distinct()
            ->whereNotNull('tahun_lulus') // Tambahkan filter ini untuk menghilangkan null
            ->orderBy('tahun_lulus', 'ASC')
            ->get();

        return view('admin.mahasiswa.adminAlumni', compact('alumni', 'angkatan', 'status', 'tahunLulus'));
    }

    public function addAlumni()
    {
        return view('admin.mahasiswa.adminAlumniAdd');
    }

    public function addAlumni_proses(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:alumni,nim',
            'nama' => 'required',
            'angkatan' => 'required',
            'tahun_lulus' => 'required',
            'sk_yudisium' => 'required',
        ]);

        $alumni = new Alumni();
        $alumni->nim = $request->nim;
        $alumni->nama = $request->nama;
        $alumni->angkatan = $request->angkatan;
        $alumni->status = 'Lulus';
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->sk_yudisium = $request->sk_yudisium;
        $alumni->save();

        return redirect('/admin/alumni')->with('success', 'Data Alumni Berhasil Ditambahkan');
    }


    public function editAlumni($id)
    {

        $alumni = Alumni::where('id', $id)->first();
        return view('admin.mahasiswa.adminAlumniEdit', compact('alumni'));
    }


    public function editAlumni_proses(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'tahun_lulus' => 'required',
            'sk_yudisium' => 'required',
        ]);

        $alumni = Alumni::find($request->id);
        if (!$alumni) {
            return redirect('/admin/alumni')->with('error', 'Data alumni tidak ditemukan.');
        }

        $alumni->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'tahun_lulus' => $request->tahun_lulus,
            'sk_yudisium' => $request->sk_yudisium,
        ]);

        return redirect('/admin/alumni')->with('success', 'Data Alumni Berhasil Diubah');
    }

    public function hapusAlumni($id)
    {
        Alumni::where('id', $id)
            ->delete();

        return redirect('/admin/alumni');
    }
}
