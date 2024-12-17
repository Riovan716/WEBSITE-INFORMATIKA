<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kurikulum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kurikulum')->insert([
            //2014
            [
                'kode' => 'IFS1102',
                'nama' => 'Pemograman I',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS1103',
                'nama' => 'Sains Teknologi dan Seni di Masyarakat',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MAS1101',
                'nama' => 'Matematika Dasar I',
                'semester' => 1,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'FIS1101',
                'nama' => 'Fisika Dasar I',
                'semester' => 1,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS1102',
                'nama' => 'Bahasa Inggris I',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS1101',
                'nama' => 'Pembentukan Karakter Del',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS1101',
                'nama' => 'Pengantar Teknologi Informasi',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MAS1201',
                'nama' => 'Matematika Dasar II',
                'semester' => 2,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'FIS1201',
                'nama' => 'Fisika Dasar II(+P)',
                'semester' => 2,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS1202',
                'nama' => 'Dasar Rekayasa Perangkat Lunak',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS1203',
                'nama' => 'Pengantar Desain Rekayasa',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS1201',
                'nama' => 'Pemograman II',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS1001',
                'nama' => 'Tata Tulis Karya Ilmiah',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MAS2102',
                'nama' => 'Matematika Diskrit',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MAS2001',
                'nama' => 'Probabilitas dan Statistik',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS2101',
                'nama' => 'Algoritma dan Struktur Data',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'ELS2180',
                'nama' => 'Sistem Digital',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'ISS2101',
                'nama' => 'Basis Data',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS2102',
                'nama' => 'Logika Informatika',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MAS2202',
                'nama' => 'Aljabar dan Geometri',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS2202',
                'nama' => 'Strategi Algoritma',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'NWS2202',
                'nama' => 'Sistem Operasi',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS2203',
                'nama' => 'Pemograman Berbasis Objek',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'NWS2201',
                'nama' => 'Arsitektur dan Organisasi Komputer',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS2201',
                'nama' => 'Interaksi Manusia dan Komputer',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'NWS3101',
                'nama' => 'Jaringan Komputer',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3101',
                'nama' => 'Kecerdasan Buatan',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3103',
                'nama' => 'Pengembangan Aplikasi Berbasis Web',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MRS3180',
                'nama' => 'Technopreneurship',
                'semester' => 5,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3102',
                'nama' => 'Teori Bahasa Formal dan Automata',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'ISS1001',
                'nama' => 'Dasar Sistem Informasi',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS2001',
                'nama' => 'Bahasa Inggris III',
                'semester' => 5,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'NWS3201',
                'nama' => 'Sistem Paralel dan Terdistribusi',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3202',
                'nama' => 'Manajemen Proyek Perangkat Lunak',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3201',
                'nama' => 'Pengembangan Aplikasi pada Platform Khusus',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3203',
                'nama' => 'Grafika Komputer',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS3204',
                'nama' => 'Socio-Informatika dan Profesionalisme',
                'semester' => 6,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'BPS3280',
                'nama' => 'Analisis Dampak Lingkungan',
                'semester' => 6,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS2201',
                'nama' => 'Agama dan Etika',
                'semester' => 6,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4191',
                'nama' => 'Tugas Akhir 1 dan Seminar',
                'semester' => 7,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS4101',
                'nama' => 'Pancasila dan Kewarganegaraan',
                'semester' => 7,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4101',
                'nama' => 'Rekayasa Perangkat Lunak Spesifik Domain',
                'semester' => 7,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4014',
                'nama' => 'Pemodelan dan Simulasi',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4023',
                'nama' => 'Pembangunan Aplikasi Berbasis Grafik 3D',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4190',
                'nama' => 'Kerja Praktek',
                'semester' => 7,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4026',
                'nama' => 'Pengujian Perangkat Lunak',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4025',
                'nama' => 'Pembelajaran Mesin',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4013',
                'nama' => 'Kriptografi',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'KUS3201',
                'nama' => 'Hukum dan Etika Cyber',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4290',
                'nama' => 'Tugas Akhir 2',
                'semester' => 8,
                'sks' => 4,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4020',
                'nama' => 'Pembangunan Aplikasi Berbasis Service',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4027',
                'nama' => 'Pembelajaran Mesin Lanjut',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4021',
                'nama' => 'Rekayasa Perangkat Lunak Berbasis Komponen',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'MRS4281',
                'nama' => 'Kepemimpinan Bisnis',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014,
            ],
            [
                'kode' => 'IFS4019',
                'nama' => 'Pemrosesan Teks dan Suara Bahasa Alami',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014
            ],
            [
                'kode' => 'MRS4002',
                'nama' => 'Manajemen Strategi',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2014
            ],
            [
                'kode' => 'BPS4202',
                'nama' => 'Etika Profesional',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2014,
            ],

            //2019
            [
                'kode' => 'KUS1102',
                'nama' => 'Pembentukan Karakter Del',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'MAS1101',
                'nama' => 'Matematika Dasar I',
                'semester' => 1,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => 'TIS1101',
                'nama' => 'Inovasi Digital',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS1101',
                'nama' => 'Bahasa Inggris I',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS1001',
                'nama' => 'Penulisan Karya Ilmiah',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => '10S1001',
                'nama' => 'Matematika Diskrit',
                'semester' => 1,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => 'FIS1102',
                'nama' => 'Fisika Dasar IB',
                'semester' => 1,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => 'MAS1201',
                'nama' => 'Matematika Dasar II',
                'semester' => 2,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS1202',
                'nama' => 'Pengantar Rekayasa dan Desain',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'FIS1202',
                'nama' => 'Fisika Dasar IIB',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S1213',
                'nama' => 'Rekayasa Perangkat Lunak',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S1201',
                'nama' => 'Dasar Pemograman',
                'semester' => 2,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS3002',
                'nama' => '	Agama dan Etika',
                'semester' => 3,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'MAS2001',
                'nama' => 'Probabilitas dan Statistika',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '12S2102',
                'nama' => 'Basis Data',
                'semester' => 3,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '11S2110',
                'nama' => 'Pemrograman Berorientasi Objek',
                'semester' => 3,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '14S2106',
                'nama' => 'Sistem Digital',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S2001',
                'nama' => 'Arsitektur dan Organisasi Komputer',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S2201',
                'nama' => 'Aljabar Linier',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S2202',
                'nama' => 'Jaringan Komputer',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S2203',
                'nama' => 'Sistem Operasi',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S2102',
                'nama' => 'Algoritma dan Struktur Data',
                'semester' => 4,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '11S2206',
                'nama' => 'Logika Informatika',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S2203',
                'nama' => 'Interaksi Manusia Komputer',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3109',
                'nama' => 'Pengembangan Aplikasi Berbasis Web',
                'semester' => 5,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3101',
                'nama' => 'Analisis dan Perancangan Perangkat Lunak',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '10S3109',
                'nama' => 'Kecerdasan Buatan',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3116',
                'nama' => '	Teori Bahasa Formal dan Automata',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3112',
                'nama' => '	Pengujian dan Penjaminan Mutu Perangkat Lunak',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3105',
                'nama' => 'Kriptografi dan Keamanan Informasi',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS2001',
                'nama' => '	Bahasa Inggris III',
                'semester' => 6,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3204',
                'nama' => 'Keamanan Perangkat Lunak',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3211',
                'nama' => '	Pengembangan Aplikasi Mobile',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3207',
                'nama' => 'Pembelajaran Mesin',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S3208',
                'nama' => 'Manajemen Proyek Perangkat Lunak',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '13S3215',
                'nama' => 'Sistem Paralel dan Terdistribusi',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4190',
                'nama' => '	Kerja Praktik',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4093',
                'nama' => '	Tugas Akhir 1',
                'semester' => 7,
                'sks' => 4,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4028',
                'nama' => '	Rekayasa Perangkat Lunak Berbasis Komponen',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4031',
                'nama' => 'Ethical Hacking and Penetration Testing',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4037',
                'nama' => 'Pemrosesan Bahasa Alami',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4026',
                'nama' => 'Pengembangan Aplikasi Platform Khusus',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '12S4056',
                'nama' => 'Visualisasi Data',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS4101',
                'nama' => 'Pancasila dan Kewarganegaraan',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => 'TIS3001',
                'nama' => '	Keteknowiraan',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => 'KUS3001',
                'nama' => 'Analisis Dampak Lingkungan',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4095',
                'nama' => '	Kapita Selekta',
                'semester' => 8,
                'sks' => 1,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4030',
                'nama' => 'UI/UX Design',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4025',
                'nama' => 'Pembangunan Aplikasi Berbasis Service',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '31S4201',
                'nama' => 'Etika Keprofesian',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => '12S4005',
                'nama' => 'Hukum dan Etika Siber',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4032',
                'nama' => 'Information Security Governance and Risk Manajemen',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4035',
                'nama' => '	Interpretasi dan Pengolahan Citra',
                'semester' => 8,
                'sks' =>     3,
                'tahun' => 2019
            ],
            [
                'kode' => '13S4033',
                'nama' => 'Keamanan Jaringan',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            [
                'kode' => '11S4036',
                'nama' => 'Pembelajaran Mesin Lanjut',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2019
            ],
            //2024
            [
                'kode' => 'MAS1101',
                'nama' => 'Matematika Dasar I',
                'semester' => 1,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS1101',
                'nama' => 'Bahasa Inggris I',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS1102',
                'nama' => 'Pembentukan Karakter Del',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS1001',
                'nama' => 'Bahasa Indonesia',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => '10S1001',
                'nama' => 'Matematika Diskrit',
                'semester' => 1,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S1111',
                'nama' => 'Pemrograman Fungsional (+P)',
                'semester' => 1,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS0101',
                'nama' => 'Penyelesaian Masalah di Dunia Digital',
                'semester' => 1,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'MAS1201',
                'nama' => 'Matematika Dasar II',
                'semester' => 2,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS1202',
                'nama' => 'Pengantar Rekayasa dan Desain',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => '11S1221',
                'nama' => 'Pemodelan dan Simulasi (+P)',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'FIS1202',
                'nama' => 'Rekayasa Perangkat Lunak',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S1201',
                'nama' => 'Pemograman Prosedural (+P)',
                'semester' => 2,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS0001',
                'nama' => 'Pancasila',
                'semester' => 2,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS0202',
                'nama' => 'Agama',
                'semester' => 3,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => '11S2126',
                'nama' => 'Teori Bahasa Formal dan Automata',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S2001',
                'nama' => 'Jaringan Komputer (+P)',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S2113',
                'nama' => 'Pemrograman Berorientasi Objek (+P)',
                'semester' => 3,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '10S1002',
                'nama' => 'Arsitektur dan Organisasi Komputer (+P)',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S1003',
                'nama' => 'Basis Data (+P)',
                'semester' => 3,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'MAS2101',
                'nama' => 'Probabilitas dan Statistika',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S2201',
                'nama' => 'Aljabar Linier',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S2002',
                'nama' => 'Sistem Operasi (+P)',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S2215',
                'nama' => 'Algoritma dan Struktur Data (+P)',
                'semester' => 4,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S2223',
                'nama' => 'Logika Informatika',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S2224',
                'nama' => 'Interaksi Manusia Komputer',
                'semester' => 4,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3133',
                'nama' => 'Pengembangan Aplikasi Berbasis Web (+P)',
                'semester' => 5,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3132',
                'nama' => 'Analisis dan Perancangan Perangkat Lunak',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '10S3001',
                'nama' => 'Kecerdasan Buatan (+P)',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3126',
                'nama' => 'Manajemen Proyek Teknologi Informasi',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3135',
                'nama' => 'Pengujian dan Penjaminan Mutu Perangkat Lunak (+P)',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3143',
                'nama' => 'Kriptografi dan Keamanan Informasi',
                'semester' => 5,
                'sks' => 3,
                'tahun' => 2024
            ],

            [
                'kode' => 'KUS0201',
                'nama' => 'Bahasa Inggris III',
                'semester' => 6,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3244',
                'nama' => 'Keamanan Perangkat Lunak',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3237',
                'nama' => 'Pengembangan Aplikasi Mobile (+P)',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3242',
                'nama' => 'Pembelajaran Mesin (+P)',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3228',
                'nama' => 'Proyek Perangkat Lunak (+P)',
                'semester' => 6,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S3246',
                'nama' => 'Sistem Paralel dan Terdistribusi (+P)',
                'semester' => 6,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4190',
                'nama' => 'Kerja Praktik',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4093',
                'nama' => 'Tugas Akhir 1',
                'semester' => 7,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4051',
                'nama' => 'Pemrograman Berbasis Blok',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4053',
                'nama' => 'Pengembangan Aplikasi Platform Khusus',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4055',
                'nama' => 'Pengujian Otomasi',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4056',
                'nama' => 'Ethical Hacking dan Penetration Testing',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4062',
                'nama' => 'Pembelajaran Mesin Lanjut',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3061',
                'nama' => 'Magang 1',
                'semester' => 7,
                'sks' => 1,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3062',
                'nama' => 'Magang 2',
                'semester' => 7,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3063',
                'nama' => 'Magang 3',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3061',
                'nama' => 'Magang 4',
                'semester' => 7,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3061',
                'nama' => 'Magang 5',
                'semester' => 7,
                'sks' => 5,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3061',
                'nama' => 'Magang 6',
                'semester' => 7,
                'sks' => 6,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3071',
                'nama' => 'Penelitian 1',
                'semester' => 7,
                'sks' => 1,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3072',
                'nama' => 'Penelitian 2',
                'semester' => 7,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3073',
                'nama' => 'Penelitian 3',
                'semester' => 7,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3074',
                'nama' => 'Penelitian 4',
                'semester' => 7,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3075',
                'nama' => 'Penelitian 5',
                'semester' => 7,
                'sks' => 5,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3076',
                'nama' => 'Penelitian 6',
                'semester' => 7,
                'sks' => 6,
                'tahun' => 2024
            ],
            [
                'kode' => 'TIS0001',
                'nama' => 'Keteknowiraan',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4094',
                'nama' => 'Tugas Akhir 2',
                'semester' => 8,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4195',
                'nama' => 'Kapita Selekta',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4052',
                'nama' => 'Pembangunan Aplikasi Berbasis Service',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4054',
                'nama' => 'UI/UX Design',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4057',
                'nama' => 'Keamanan Jaringan Siber',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4063',
                'nama' => 'Kecerdasan Komputasional',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => '11S4064',
                'nama' => 'Visi Komputer',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3051',
                'nama' => 'Studi/Proyek Independen 1',
                'semester' => 8,
                'sks' => 1,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3052',
                'nama' => 'Studi/Proyek Independen 2',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3053',
                'nama' => 'Studi/Proyek Independen 3',
                'semester' => 8,
                'sks' => 3,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3054',
                'nama' => 'Studi/Proyek Independen 4',
                'semester' => 8,
                'sks' => 4,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3055',
                'nama' => 'Studi/Proyek Independen 5',
                'semester' => 8,
                'sks' => 5,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS3056',
                'nama' => 'Studi/Proyek Independen 6',
                'semester' => 8,
                'sks' => 6,
                'tahun' => 2024
            ],
            [
                'kode' => 'KUS0203',
                'nama' => 'Kewarganegaraan',
                'semester' => 8,
                'sks' => 2,
                'tahun' => 2024
            ],
        ]);
    }
}
