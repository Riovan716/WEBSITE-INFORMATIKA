<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisasiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisasi')->insert([
            [
                'nama' => "Arie Satia Dharma",
                'gambar' => "Arie.jpg",
                'divisi' => "Pembina",
                'jabatan' => "Pembina",
                'tahun' => 2024,
            ],
            [
                'nama' => "Bertrand Sianipar",
                'gambar' => "",
                'divisi' => "MPH",
                'jabatan' => "Ketua",
                'tahun' => 2024,
            ],
            [
                'nama' => "Rachel Nababan",
                'gambar' => "",
                'divisi' => "MPH",
                'jabatan' => "Wakil Ketua",
                'tahun' => 2024,
            ],
            [
                'nama' => "Baha Ambrosius Sibarani",
                'gambar' => "baha_ketua.jpg",
                'divisi' => "BPH",
                'jabatan' => "Ketua",
                'tahun' => 2024,
            ],
            [
                'nama' => "Paul Bornok Manurung",
                'gambar' => "",
                'divisi' => "BPH",
                'jabatan' => " Wakil Ketua",
                'tahun' => 2024,
            ],
            [
                'nama' => "Nadia Gracia Sirait",
                'gambar' => "",
                'divisi' => "BPH",
                'jabatan' => "Sekretaris",
                'tahun' => 2024,
            ],
            [
                'nama' => "Lola Tampubolon",
                'gambar' => "",
                'divisi' => "BPH",
                'jabatan' => "Wakil Sekretaris",
                'tahun' => 2024,
            ],
            [
                'nama' => "Olga Prischilla",
                'gambar' => "",
                'divisi' => "BPH",
                'jabatan' => "Bendahara",
                'tahun' => 2024,
            ],
            [
                'nama' => "Marshall Manurung",
                'gambar' => "",
                'divisi' => "BPH",
                'jabatan' => "Wakil Bendahara",
                'tahun' => 2024,
            ],
            [
                'nama' => "Okdini Hutagalung",
                'gambar' => "",
                'divisi' => "Pendidikan",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,
            ],
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Pendidikan",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Pendidikan",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Sunanda Erika Natukdo Munthe",
                'gambar' => "",
                'divisi' => "Danus",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,
            ],
            [
                'nama' => "Lusiana Silaen",
                'gambar' => "",
                'divisi' => "Danus",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Danus",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Danus",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Prans Daniel Simarmata",
                'gambar' => "",
                'divisi' => "Ristek",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,
            ],
            [
                'nama' => "Ridho Pakpahan",
                'gambar' => "",
                'divisi' => "Ristek",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Ruth Angelica Manurung",
                'gambar' => "",
                'divisi' => "Ristek",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Firman Bintang Hutasoit",
                'gambar' => "",
                'divisi' => "Ristek",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Pangeran Simamora",
                'gambar' => "",
                'divisi' => "Minat",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,

            ],
            
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Minat",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "",
                'gambar' => "",
                'divisi' => "Minat",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Yizreel Schwartz Sipahutar",
                'gambar' => "",
                'divisi' => "Kominfo",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,
            ],
            [
                'nama' => "Roy Jonathan Hutajulu",
                'gambar' => "roy_kominfo_anggota.jpg",
                'divisi' => "Kominfo",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Ferdinand Martua Sihombing",
                'gambar' => "ferdinand_kominfo_anggota.jpg",
                'divisi' => "Kominfo",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Esra Medi Rosdina Silaen",
                'gambar' => "",
                'divisi' => "Humas",
                'jabatan' => "Kepala Divisi",
                'tahun' => 2024,
            ],
            [
                'nama' => "Syvra Tambun",
                'gambar' => "",
                'divisi' => "Humas",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "D. Yophanci P. Sihombing",
                'gambar' => "",
                'divisi' => "Humas",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
            [
                'nama' => "Angel Lampita Lubis",
                'gambar' => "",
                'divisi' => "Humas",
                'jabatan' => "Anggota",
                'tahun' => 2024,
            ],
        ]);

    }
}
