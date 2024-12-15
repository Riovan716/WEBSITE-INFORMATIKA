<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data dummy untuk tabel participants
        Participant::insert([

            [
                'nim' => '11S20023',
                'nama' => 'Natanael Jansudin Siregar',
                'prestasi' => 'Juara 2',
                'keterangan' => 'Hackathon Code For The Nation Tingkat Nasional',
                'gambar' => '14.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 1,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S2002',
                'nama' => 'Yoel Ganda Aprilco Napitupulu',
                'prestasi' => 'Juara 2',
                'keterangan' => 'Hackathon Code For The Nation Tingkat Nasional',
                'gambar' => '14.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 1,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S2020',
                'nama' => 'Roosen Gabriel Manurung',
                'prestasi' => 'Juara 2',
                'keterangan' => 'Hackathon Code For The Nation Tingkat Nasional',
                'gambar' => '14.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 1,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S23010',
                'nama' => 'Ridho Alexander Pakpahan',
                'prestasi' => 'Finalis',
                'keterangan' => 'ON Mipa tingkat nasional',
                'gambar' => '1.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 8,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S22038',
                'nama' => 'Yizreel Schwartz Sipahutar',
                'prestasi' => 'Peserta',
                'keterangan' => 'ON Mipa tingkat Wilayah',
                'gambar' => '',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 8,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S23013',
                'nama' => 'Wesly Fery Wanda Ambarita',
                'prestasi' => 'Peserta',
                'keterangan' => 'ON Mipa tingkat Wilayah',
                'gambar' => '2.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 8,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21016',
                'nama' => 'Putri Ayu Manurung',
                'prestasi' => 'Juara 1',
                'keterangan' => 'Building Security Lab Microsoft Tingkat Naasional',
                'gambar' => '3.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 9,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S2004',
                'nama' => 'Samuel Immanuel Herlinton Sibuea',
                'prestasi' => 'Pesertaa',
                'keterangan' => 'Google Cloud Arcade Program Tingkat Nasional',
                'gambar' => '10.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 10,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21008',
                'nama' => 'Missyolin Eunike Rungguni Samosir',
                'prestasi' => 'Peserta',
                'keterangan' => 'Huawei Developer Competition 2023 APAC Tingkat Internasional',
                'gambar' => '',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 2,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21008',
                'nama' => 'Missyolin Eunike Rungguni Samosir',
                'prestasi' => 'Juara 1',
                'keterangan' => 'Huawei ICT Competition 2023 Indonesia (Innovation Track) Tingkat Nasional',
                'gambar' => '5.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 3,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21031',
                'nama' => 'Theo Samuel Dicunawi Aritonang',
                'prestasi' => 'Juara 1',
                'keterangan' => 'Huawei IsCT Competition 2023 Indonesia (Innovation Track) Tingkat Nasional',
                'gambar' => '5.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 3,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21016',
                'nama' => 'Putri Ayu Manurung',
                'prestasi' => 'Peserta',
                'keterangan' => 'ICSTAR Hackhaton Tingkat Nasional',
                'gambar' => '7.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 4,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S21016',
                'nama' => 'Putri Ayu Manurung',
                'prestasi' => 'Peserta',
                'keterangan' => 'Indie Game Ignite COMPFEST 15 Tingkat Nasional',
                'gambar' => '6.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 5,  // Sesuaikan dengan id kompetisi yang sesuai
            ],

            [
                'nim' => '11S20004',
                'nama' => 'Samuel Immanuel Herlinton Sibuea',
                'prestasi' => 'Peserta',
                'keterangan' => 'International Collegiate Programming Contest Tingkat Nasional',
                'gambar' => '8.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 6,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S20032',
                'nama' => 'Yosua Putra WIsesa Haloho',
                'prestasi' => 'Peserta',
                'keterangan' => 'International Collegiate Programming Contest Tingkat Nasional',
                'gambar' => '8.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 6,  // Sesuaikan dengan id kompetisi yang sesuai
            ],

            [
                'nim' => '11S20035',
                'nama' => 'Michael Albert Sholay Napitupulu',
                'prestasi' => 'Peserta',
                'keterangan' => 'International Collegiate Programming Contest Tingkat Nasional',
                'gambar' => '8.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 6,  // Sesuaikan dengan id kompetisi yang sesuai
            ],

            [
                'nim' => '11S22036',
                'nama' => 'Rohit Panjaitan',
                'prestasi' => 'Finalis',
                'keterangan' => 'ON MIPA PT (Bidang Matematika) Tingkat Nasional',
                'gambar' => '9.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 7,  // Sesuaikan dengan id kompetisi yang sesuai
            ],

            [
                'nim' => '11S22038',
                'nama' => 'Yizreel Schwartz Sipahutar',
                'prestasi' => 'Peserta',
                'keterangan' => 'ON MIPA PT (Bidang Matematika) Tingkat Wilayah',
                'gambar' => '10.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 7,  // Sesuaikan dengan id kompetisi yang sesuai
            ],
            [
                'nim' => '11S22039',
                'nama' => 'Prans Daniel Simarmata',
                'prestasi' => 'Peserta',
                'keterangan' => 'ON MIPA PT (Bidang Matematika) Tingkat Wilayah',
                'gambar' => '11.png',  // Pastikan file gambar sudah ada di folder yang tepat
                'kompetisi_id' => 7,  // Sesuaikan dengan id kompetisi yang sesuai
            ],


        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
