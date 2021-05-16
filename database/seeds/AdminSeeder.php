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
    }
}
