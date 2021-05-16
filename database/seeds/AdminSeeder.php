<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katejabatans')->insert([
        	[
                'nama' => 'Kepala Sekolah',
                'role' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
                'nama' => 'Wakil Kepala Sekolah',
                'role' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
                'nama' => 'Kepala Program Studi',
                'role' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
                'nama' => 'Guru',
                'role' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
                'nama' => 'Tata Usaha',
                'role' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
                'nama' => 'Petugas Kebersihan',
                'role' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
        	],
        ]);

        DB::table('pertanyaans')->insert([
            [
                'pertanyaan' => 'Apakah anda mengenal',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Seberapa baikkah A dalam menyampaikan informasi atau pendapat dengan jelas/mudah dimengerti, lengkap , singkat dan tepat',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Tindakan konsisten A sesuai dengan nilai-nilai dan kode etik serta kejujuran dari seorang pegawai untuk menerima atau mendapatkan apa yang sudah menjadi haknya yaitu gaji, tunjangan dsb yang diberikan sudah ditentukan sesuai dengan tugas yang diberika oleh atasan dalam bekerja dalam minggu ini',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Seberapa baikkah A dalam pantang menyerah untuk tetap fokus pada pencapaian tujuan walaupun harus berhadapan dengan berbagai kesulitan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Seberapa baikkah A dalam berinofasi dan menyelesaikan masalah yang ada pada pekerjaan dan lingkungannya',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Bagaimana sikap dan perilaku kerja A dalam memberikan pelayanan terbaik kepada yang dilayani meliputi, siswa, masyarakat, atasan, rekan kerja, unit kerja terkait.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Bagaimana kemampuan dan kemauan A untuk memotifasi dan mempengaruhi orang lain yang berkaitan dengan bidang tugasnya demi tercapainya tujuan organisasi. Kepemimpinan yang memiliki karakter sebagai panutan, penyemangat dan pemberdaya',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A mengikuti standar pelayanan yang berlaku di organisasi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A bersikap netral dan tidak deskriminatif dalam memberikan pelayanan terhadap siswa, masyarakat, atasan, rekan kerja, unit kerja terkait.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A menanggapi permintaan bantuan layanan dari siswa, masyarakat, atasan, rekan kerja, unit kerja terkait dengan cepat dan tepat',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A tidak menunda pekerjaan yang dibebankan kepadanya.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A bersedia melaksanakan tugas melebihi tanggung jawabnya.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A berperan aktif dalam mendukung pencapain visi dan misi organisasi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A untuk menjaga nama baik organisasi dalam berbagai situasi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A bersikap ramah dalam memberikan pelayanan terhadap siswa, masyarakat, atasan, rekan kerja, unit kerja terkait',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A semangat mencari solusi untuk mengatasi permasalahan dalam pekerjaan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A berperan aktif dalam mengembangkan lingkungan kerja yang inovatif',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A berbagi informasi yang bermanfaat pada anggota kelompok, mempertimbangkan masukan dari anggota kelompok yang lain dan bersedia belajar dari orang lain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A membantu rekan kerja yang mengalami kesulitan dalam menyelesaikan tugasnya.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A melakukan pekerjaannya di lingkungan sekolah dan pada jam kerja yang sudah ditentukan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'pertanyaan' => 'Dalam melaksanakan tugas sebagai pegawai, A bertanggung jawab terhadap tugas tambahan yang diberikan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
