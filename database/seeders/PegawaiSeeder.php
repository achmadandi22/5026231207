<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus data lama jika ada
        DB::table('pegawai')->truncate();
        
        // Masukkan data baru yang unik
        $data_pegawai = [
            [
                'pegawai_nama' => 'Ahmad Andi',
                'pegawai_jabatan' => 'Manager Proyek',
                'pegawai_umur' => 28,
                'pegawai_alamat' => 'Jl. Keputih Tegal No. 15, Surabaya'
            ],
            [
                'pegawai_nama' => 'Budi Santoso',
                'pegawai_jabatan' => 'Senior Developer',
                'pegawai_umur' => 32,
                'pegawai_alamat' => 'Jl. Gebang Lor No. 21, Surabaya'
            ],
            [
                'pegawai_nama' => 'Citra Dewi',
                'pegawai_jabatan' => 'UI/UX Designer',
                'pegawai_umur' => 25,
                'pegawai_alamat' => 'Jl. Mulyosari No. 45, Surabaya'
            ],
            [
                'pegawai_nama' => 'Dimas Prayoga',
                'pegawai_jabatan' => 'Backend Developer',
                'pegawai_umur' => 27,
                'pegawai_alamat' => 'Jl. Arief Rahman Hakim No. 32, Surabaya'
            ],
            [
                'pegawai_nama' => 'Eka Putri',
                'pegawai_jabatan' => 'Frontend Developer',
                'pegawai_umur' => 24,
                'pegawai_alamat' => 'Jl. Kertajaya Indah No. 10, Surabaya'
            ],
            [
                'pegawai_nama' => 'Fajar Ramadhan',
                'pegawai_jabatan' => 'DevOps Engineer',
                'pegawai_umur' => 30,
                'pegawai_alamat' => 'Jl. Dharmahusada No. 18, Surabaya'
            ],
            [
                'pegawai_nama' => 'Gita Nirmala',
                'pegawai_jabatan' => 'QA Engineer',
                'pegawai_umur' => 26,
                'pegawai_alamat' => 'Jl. Manyar Kertoarjo No. 5, Surabaya'
            ],
            [
                'pegawai_nama' => 'Hendra Wijaya',
                'pegawai_jabatan' => 'System Analyst',
                'pegawai_umur' => 33,
                'pegawai_alamat' => 'Jl. Nginden Semolo No. 27, Surabaya'
            ],
            [
                'pegawai_nama' => 'Indah Permata',
                'pegawai_jabatan' => 'Data Scientist',
                'pegawai_umur' => 29,
                'pegawai_alamat' => 'Jl. Rungkut Asri No. 12, Surabaya'
            ],
            [
                'pegawai_nama' => 'Joko Susilo',
                'pegawai_jabatan' => 'IT Support',
                'pegawai_umur' => 31,
                'pegawai_alamat' => 'Jl. Klampis Jaya No. 8, Surabaya'
            ]
        ];
        
        // Insert data ke database
        DB::table('pegawai')->insert($data_pegawai);
    }
}
