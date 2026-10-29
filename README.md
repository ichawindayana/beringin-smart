# Beringin Smart 🏫 — Portal Pengaduan Sarana & Prasarana Sekolah

<div align="center">
  <img src="Beringin-Smart/public/logo-smkn1beringin.png" alt="Logo SMKN 1 Beringin" width="130" style="margin-bottom: 12px;"/>
  <p><strong>Aplikasi Pelaporan & Manajemen Kerusakan Sarana Prasarana Terpadu</strong></p>
  <p><em>SMK Negeri 1 Beringin • Tahun Ajaran 2026/2027</em></p>
</div>

---

## 📋 Informasi Proyek

| Atribut | Informasi Terdaftar |
| :--- | :--- |
| **Nama Siswa** | **Icha Windayana** |
| **Kelas & Jurusan** | **XI Pengembangan Perangkat Lunak & Gim 2 (XI PPLG 2)** |
| **Sekolah** | SMK Negeri 1 Beringin, Deli Serdang |
| **Petugas / Teknisi** | Bu Diana *(Staf Inventaris Sarana & Prasarana)* |
| **Teknologi Frontend** | Ionic React (v8), Vite, TypeScript, Lucide React, Axios |
| **Teknologi Backend** | Laravel 11 RESTful API, Laravel Sanctum, MySQL |
| **Standar Acuan** | SKKNI No. 282 Tahun 2016 (Pemrograman Web & Perangkat Bergerak) |

---

## 🎨 Karakteristik & Filosofi Desain

Proyek ini mengusung tema **Amethyst Violet & Mulberry Orchid**:
- **Palet Warna**: Latar belakang ungu gelap anggun (`#3b0764`, `#1e082e`), aksen orchid cerah (`#9333ea`, `#e879f9`), dan tipografi bersih.
- **Kartu & Komponen**: Visual kartu modern dengan batas pendar lembut dan sudut melengkung halus.
- **Halaman Login**: Menampilkan logo resmi SMK Negeri 1 Beringin dengan formulir responsif dan akses preset akun uji coba.

---

## 🔐 Kredensial Uji Coba Sistem

| Role | Akun Demo | Password | Hak Akses |
| :--- | :--- | :--- | :--- |
| **Siswa Utama** | `icha@beringin.sch.id` | `password123` | Membuat pengaduan sarpras baru, melihat riwayat tiket |
| **Petugas Sarpras** | `petugas@beringin.sch.id` | `password123` | Melihat seluruh tiket masuk, memverifikasi & update status pengerjaan |
| **Siswa Pendukung** | `siswa@beringin.sch.id` | `password123` | Simulasi laporan dari akun siswa lainnya |

---

## ⚙️ Petunjuk Menjalankan Proyek

### 1. Backend (Laravel API)
```bash
cd beringin-backend
php artisan migrate --seed
php artisan serve --port=8000
```

### 2. Frontend (Ionic React)
```bash
cd Beringin-Smart
npm run dev
```
