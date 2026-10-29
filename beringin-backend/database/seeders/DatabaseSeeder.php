<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Petugas Sarpras
        $petugas = User::create([
            'name' => 'Bu Diana (Staf Inventaris Sarpras)',
            'email' => 'petugas@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'petugas',
        ]);

        // 2. Akun Siswa Utama
        $siswa = User::create([
            'name' => 'Icha Windayana (XI PPLG 2)',
            'email' => 'icha@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 3. Akun Siswa Pendukung
        $teman = User::create([
            'name' => 'Tiara Safitri (XI PPLG 1)',
            'email' => 'siswa@beringin.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // 4. Data Awal Laporan Pengaduan Sarpras (Icha Windayana)
        Laporan::create([
            'user_id' => $siswa->id,
            'nama' => 'Pendingin Ruangan (AC) Ruang Praktik PPLG 2 Bocor Menetes',
            'lokasi' => 'Ruang Praktik Kejuruan PPLG 2 Lantai 2',
            'kategori' => 'Laboratorium',
            'deskripsi' => 'Indoor AC unit 1 meneteskan air ke meja siswa dekat jendela, pipa drainase tersumbat dan udara tidak dingin.',
            'status' => 'Sedang Diproses',
        ]);

        Laporan::create([
            'user_id' => $teman->id,
            'nama' => 'Pintu Lemari Arsip Perpustakaan Kunci Macet',
            'lokasi' => 'Ruang Perpustakaan Utama',
            'kategori' => 'Fasilitas Kelas',
            'deskripsi' => 'Kunci putar silinder lemari arsip buku kurikulum macet patah di dalam lubang kunci, arsip buku belum bisa diakses.',
            'status' => 'Menunggu',
        ]);

        Laporan::create([
            'user_id' => $siswa->id,
            'nama' => 'Plafon Selasar Depan UKS Jebol Akibat Hujan',
            'lokasi' => 'Selasar Penghubung Gedung C dan UKS',
            'kategori' => 'Lingkungan/Taman',
            'deskripsi' => 'Plafon gipsum ukuran 1x1 meter rembes air dan ambruk sebagian saat hujan lebat, puing gipsum berserakan di koridor jalan.',
            'status' => 'Selesai',
        ]);
    }
}
