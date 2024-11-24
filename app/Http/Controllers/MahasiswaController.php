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
        $query = Alumni::where('status', 'lulus'); // Menggunakan model Alumni

        $angkatan = Mahasiswa::select('angkatan')->distinct()->get(); // Masih bisa mengambil data Mahasiswa
        $status = Mahasiswa::select('status')->distinct()->get();

        if ($request->has('searchby') && $request->searchby == 'angkatan' && $request->has('searchvalue')) {
            $query->where('angkatan', $request->searchvalue);
        }

        if ($request->has('searchby') && $request->searchby == 'status' && $request->has('searchvalue')) {
            $query->where('status', $request->searchvalue);
        }

        $alumni = $query->orderBy('nim', 'ASC')->paginate(20);
        return view('alumni', compact('alumni', 'angkatan', 'status'));
    }





    public function adminAlumni()
    {
        $alumni = Mahasiswa::where('status', 'lulus')
            ->orderBy('nim', 'ASC')
            ->paginate(20);

        return view('admin.mahasiswa.adminAlumni')->with('data', $alumni);
    }
}
