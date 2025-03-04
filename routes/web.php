<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\AdminSejarahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/organisasi', [OrganisasiController::class, 'organisasi']);
Route::get('/kurikulum', [KurikulumController::class, 'kurikulum']);
Route::get('/sejarah', [SejarahController::class, 'sejarah']);
Route::get('/profil-lulusan', [BlogController::class, 'profilLulusan']);
Route::get('/staffDosen', [DosenController::class, 'staffDosen']);
Route::get('/staffDosen/{id}', [DosenController::class, 'detailDosen']);
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/filter-mahasiswa', [MahasiswaController::class, 'filterMahasiswa'])->name('filter.mahasiswa');
Route::get('/alumni', [MahasiswaController::class, 'alumni'])->name('alumni');
Route::get('/visiMisi', [VisiMisiController::class, 'visiMisi']);
Route::get('/event/{id}', [EventController::class, 'tampil_event']);
Route::get('/eventsAll', [EventController::class, 'eventAll']);
Route::get('/beritaAll', [BeritaController::class, 'beritaAll']);
Route::get('/berita/{id}', [BeritaController::class, 'tampil_berita']);
Route::get('/kompetisi/{id}', [KompetisiController::class, 'tampil_kompetisi']);
Route::get('/kompetisiAll', [KompetisiController::class, 'kompetisiAll']);
Route::post('/cariProses', [BlogController::class, 'cariProses']);
Route::get('/participant', [KompetisiController::class, 'participant'])->name('participant');




//ADMIN
Route::get('/admin', [adminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN NEWS
Route::get('/admin/berita', [BeritaController::class, 'berita'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/addBerita', [BeritaController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [BeritaController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addBerita', [BeritaController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [BeritaController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editBerita/{id}', [BeritaController::class, 'editBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editBerita/proses', [BeritaController::class, 'editBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusBerita/{id}', [BeritaController::class, 'hapusBerita'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN EVENTS
Route::get('/admin/showEvent', [EventController::class, 'showEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addEvents', [EventController::class, 'addEvents'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addEvents_proses', [EventController::class, 'addEvents_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editEvents/{id}', [EventController::class, 'editEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editEvents/proses', [EventController::class, 'editEvent_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusEvent/{id}', [EventController::class, 'hapusEvent'])->middleware(['auth', 'verified'])->name('dashboard');

//DOSEN
Route::get('/admin/dosen', [DosenController::class, 'dosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addDosen', [DosenController::class, 'addDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addDosen_proses', [DosenController::class, 'addDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editDosen/{id}', [DosenController::class, 'editDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editDosen_proses', [DosenController::class, 'editDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusDosen/{id}', [DosenController::class, 'hapusDosen'])->middleware(['auth', 'verified'])->name('dashboard');

//Kompetisi
Route::get('/admin/kompetisi', [KompetisiController::class, 'showKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKompetisi', [KompetisiController::class, 'addKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKompetisi_proses', [KompetisiController::class, 'addKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editKompetisi/{id}', [KompetisiController::class, 'editKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editKompetisi/proses', [KompetisiController::class, 'editKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusKompetisi/{id}', [KompetisiController::class, 'hapusKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/viewParticipant/{kompetisi_id}', [KompetisiController::class, 'viewParticipant'])->middleware(['auth', 'verified'])->name('admin.viewParticipant');
Route::get('/admin/addParticipant/{kompetisi_id}', [KompetisiController::class, 'addParticipant'])->middleware(['auth', 'verified'])->name('admin.addParticipant');
Route::post('/admin/addParticipant_proses', [KompetisiController::class, 'addParticipantProses'])->name('admin.addParticipantProses');
Route::get('/admin/hapusParticipant/{id}', [KompetisiController::class, 'hapusParticipant'])->middleware(['auth', 'verified'])->name('admin.hapusParticipant');
Route::get('/admin/editParticipant/{id}', [KompetisiController::class, 'editParticipant'])->middleware(['auth', 'verified'])->name('admin.editParticipant');
Route::post('/admin/editParticipant/proses/{id}', [KompetisiController::class, 'editParticipant_proses'])->middleware(['auth', 'verified'])->name('admin.editParticipantProses');
Route::get('/viewParticipant/{kompetisi_id}', [KompetisiController::class, 'Participant'])->name('viewParticipant');
Route::get('/getNamaByNim/{nim}', [KompetisiController::class, 'getNamaByNim'])->name('getNamaByNim');

//Kurikulum
Route::get('/admin/kurikulum', [KurikulumController::class, 'adminKurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKurikulum', [KurikulumController::class, 'addkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKurikulum_proses', [KurikulumController::class, 'addkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editkurikulum/{id}', [KurikulumController::class, 'editkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editkurikulum/proses', [KurikulumController::class, 'editkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapuskurikulum/{id}', [KurikulumController::class, 'hapuskurikulum'])->middleware(['auth', 'verified'])->name('dashboard');


//Visi Misi
Route::get('/admin/visiMisi', [VisiMisiController::class, 'showVisiMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addMisi', [VisiMisiController::class, 'addMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addMisi/proses', [VisiMisiController::class, 'addMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMisi/{id}', [VisiMisiController::class, 'editMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMisi/proses', [VisiMisiController::class, 'editMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editVisi', [VisiMisiController::class, 'editVisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editVisi/proses', [VisiMisiController::class, 'editVisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusMisi/{id}', [VisiMisiController::class, 'hapusMisi'])->middleware(['auth', 'verified'])->name('dashboard');

//Sejarah 
// Route untuk menampilkan halaman Sejarah
Route::get('/admin/sejarah', [AdminSejarahController::class, 'showSejarah'])->middleware(['auth', 'verified'])->name('admin.sejarah');

// Route untuk mengedit data Sejarah
Route::get('/admin/editSejarah', [AdminSejarahController::class, 'editSejarah'])->middleware(['auth', 'verified'])->name('admin.sejarah.edit');

// Route untuk menyimpan perubahan data Sejarah
Route::post('/admin/editSejarah', [AdminSejarahController::class, 'editSejarahProses'])->middleware(['auth', 'verified'])->name('admin.sejarah.edit.proses');



//Organisasi
Route::get('/admin/organisasi', [OrganisasiController::class, 'adminOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addOrganisasi', [OrganisasiController::class, 'addOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addOrganisasi_proses', [OrganisasiController::class, 'addOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editOrganisasi/{id}', [OrganisasiController::class, 'editOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editOrganisasi_proses', [OrganisasiController::class, 'editOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusOrganisasi/{id}', [OrganisasiController::class, 'hapusOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('adminMenu');
})->middleware(['auth', 'verified'])->name('dashboard');

//Mahasiswa
Route::get('/admin/mahasiswa', [MahasiswaController::class, 'adminMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/filtermahasiswa', [MahasiswaController::class, 'adminFilterMahasiswa'])->middleware(['auth', 'verified'])->name('filter.AdminMahasiswa');
Route::get('/admin/addMahasiswa', [MahasiswaController::class, 'addMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addMahasiswa_proses', [MahasiswaController::class, 'addMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMahasiswa/{id}', [MahasiswaController::class, 'editMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMahasiswa_proses', [MahasiswaController::class, 'editMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/admin/hapusMahasiswa/{id}', [MahasiswaController::class, 'hapusMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');

// Alumni
Route::get('/admin/alumni', [MahasiswaController::class, 'adminAlumni'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/filteralumni', [MahasiswaController::class, 'adminFilterAlumni'])->middleware(['auth', 'verified'])->name('filter.AdminAlumni');
Route::get('/admin/addAlumni', [MahasiswaController::class, 'addAlumni'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/getNamaByNim', [MahasiswaController::class, 'getNamaByNim'])->name('getNamaByNim');
Route::post('/addAlumni_proses', [MahasiswaController::class, 'addAlumni_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editAlumni/{id}', [MahasiswaController::class, 'editAlumni'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editAlumni_proses', [MahasiswaController::class, 'editAlumni_proses'])->middleware(['auth', 'verified'])->name('editAlumni.proses');
Route::delete('/admin/hapusAlumni/{id}', [MahasiswaController::class, 'hapusAlumni'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Kontak

Route::get('/admin/kontak', [KontakController::class, 'adminKontak'])->middleware(['auth', 'verified']);
Route::get('/admin/addKontak', [KontakController::class, 'adminKontakAdd'])->middleware(['auth', 'verified']);
Route::post('/admin/addKontak/proses', [KontakController::class, 'addKontak_proses'])->middleware(['auth', 'verified']);
Route::get('/admin/editKontak', [KontakController::class, 'adminKontakEdit'])->middleware(['auth', 'verified']);
Route::post('/admin/editKontak/proses', [KontakController::class, 'editKontak_proses'])->middleware(['auth', 'verified']);
Route::get('/admin/hapusKontak/{id}', [KontakController::class, 'deleteKontak_proses'])->middleware(['auth', 'verified']);
Route::get('/kontak', [KontakController::class, 'showKontak']);
