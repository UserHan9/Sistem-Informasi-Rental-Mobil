## Fork Repository

1. Buka repository utama:
   https://github.com/UserHan9/Sistem-Informasi-Rental-Mobil
2. Klik tombol **Fork** di bagian kanan atas.
3. Pilih akun GitHub yang akan digunakan.
4. Tunggu hingga proses fork selesai.
5. Repository akan tersalin ke akun GitHub kamu.

## Clone Repository

Setelah melakukan fork, clone repository hasil fork:

```bash
git clone git@github.com:USERNAME/Sistem-Informasi-Rental-Mobil.git
```

Masuk ke direktori project:

```bash
cd Sistem-Informasi-Rental-Mobil
```

> Ganti `USERNAME` dengan username GitHub.

## Instalasi dan Konfigurasi Laravel

### 1. Install Dependency

Install dependency Laravel menggunakan Composer:

```bash
composer install
```

### 2. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```cmd
copy .env.example .env
```

### 3. Generate Application Key

```bash
php artisan key:generate
```

### 4. Konfigurasi Database

Buat database MySQL:

```sql
CREATE DATABASE rental_mobil;
```

Sesuaikan konfigurasi database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rental_mobil
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migration dan Seeder

Jalankan migration:

```bash
php artisan migrate
```

Jalankan seeder untuk memasukkan data awal:

```bash
php artisan db:seed
```

### 6. Install Dependency Frontend

```bash
npm install
```

Build asset frontend:

```bash
npm run build
```

### 7. Jalankan Aplikasi

Jalankan server Laravel:

```bash
php artisan serve
```

Untuk development frontend, jalankan terminal terpisah:

```bash
npm run dev
```

Buka aplikasi melalui browser:

```text
http://127.0.0.1:8000
```

## API / Route Endpoints

Dokumentasi endpoint aplikasi.

### Public

| Method | Endpoint | Deskripsi |
|---|---|---|
| GET | `/` | Halaman utama aplikasi |
| GET | `/login` | Halaman login |
| POST | `/login` | Proses autentikasi login |

### Authenticated User (Login Required)

| Method | Endpoint | Middleware | Deskripsi |
|---|---|---|---|
| POST | `/logout` | `auth` | Logout pengguna |

### Admin Access (`auth`, `role:admin`)

| Method | Endpoint | Middleware | Deskripsi |
|---|---|---|---|
| GET | `/admin/dashboard` | `auth`, `role:admin` | Menampilkan dashboard Admin |

### User Access (`auth`, `role:user`)

| Method | Endpoint | Middleware | Deskripsi |
|---|---|---|---|
| GET | `/user/dashboard` | `auth`, `role:user` | Menampilkan dashboard User |

## Role dan Hak Akses

| Role | Hak Akses |
|---|---|
| Admin | Mengakses halaman Admin Dashboard |
| User | Mengakses halaman User Dashboard |

Setiap role memiliki pembatasan akses menggunakan middleware `role`.

---

# Git Workflow dan Pull Request

Setiap contributor wajib menggunakan branch terpisah dan mengajukan Pull Request (PR).

**Dilarang melakukan push langsung ke branch `main` repository utama.**

## 1. Konfigurasi Remote Repository

Periksa remote repository:

```bash
git remote -v
```

Pastikan `origin` mengarah ke repository fork milik local.

Tambahkan repository utama sebagai `upstream`:

```bash
git remote add upstream git@github.com:UserHan9/Sistem-Informasi-Rental-Mobil.git
```

Periksa kembali:

```bash
git remote -v
```

Contoh hasil:

```text
origin    git@github.com:USERNAME/Sistem-Informasi-Rental-Mobil.git
upstream  git@github.com:UserHan9/Sistem-Informasi-Rental-Mobil.git
```

## 2. Sinkronisasi Repository

Sinkronkan branch `main` local dengan repository utama:

```bash
git switch main
git fetch upstream
git pull --ff-only upstream main
git push origin main
```

Branch `main` pada repository fork akan mengikuti repository utama.

## 3. Membuat Branch Baru

Buat branch baru untuk setiap fitur atau perbaikan.

Contoh:

```bash
git switch -c feature/login
```

Contoh penamaan branch:

| Prefix | Kegunaan | Contoh |
|---|---|---|
| `feature/` | Menambahkan fitur | `feature/register` |
| `fix/` | Memperbaiki bug | `fix/login-error` |
| `update/` | Memperbarui fitur | `update/dashboard` |
| `docs/` | Memperbarui dokumentasi | `docs/readme` |

## 4. Commit Perubahan

Setelah selesai mengerjakan fitur, periksa perubahan:

```bash
git status
```

Tambahkan perubahan ke staging area:

```bash
git add .
```

Lakukan commit:

```bash
git commit -m "feat: add login feature"
```

## 5. Push ke Repository Fork

Push branch yang sudah dibuat ke repository fork:

```bash
git push -u origin feature/login
```

Perubahan akan dikirim ke branch `feature/login`.

## 6. Membuat Pull Request (PR)

Setelah berhasil melakukan push:

1. Buka repository fork di GitHub.
2. Pilih branch yang sudah di-push, misalnya `feature/login`.
3. Klik **Contribute** kemudian **Open pull request**, atau klik **Compare & pull request** jika tersedia.
4. Pastikan konfigurasi Pull Request sebagai berikut:

**Base repository:**
`UserHan9/Sistem-Informasi-Rental-Mobil`

**Base branch:**
`main`

**Head repository:**
`USERNAME/Sistem-Informasi-Rental-Mobil`

**Compare branch:**
`feature/login`

5. Isi judul dan deskripsi Pull Request.
6. Periksa kembali file yang mengalami perubahan.
7. Klik **Create pull request**.

## 7. Review dan Merge

Setelah Pull Request dibuat:

1. Maintainer repository utama akan memeriksa perubahan kode.
2. Jika kesalahan atau konflik, contributor diminta melakukan perbaikan.
3. Jika perubahan sudah sesuai, sayah dapat menyetujui Pull Request.
4. Maintainer melakukan merge ke branch `main`.

## 8. Sinkronisasi Jika Ada Perubahan Terbaru

Jika repository utama sudah mendapatkan perubahan dari contributor lain, sinkronkan branch fitur:

```bash
git fetch upstream
git switch feature/login
git merge upstream/main
```

Jika terjadi conflict:

1. Buka file yang mengalami conflict.
2. Perbaiki bagian kode.
3. Simpan perubahan.

jalankan:

```bash
git add .
git commit -m "fix: resolve merge conflicts"
git push origin feature/login
```

Pull Request akan otomatis diperbarui setelah push.

---

## Aturan Penting untuk Contributor

1. Jangan melakukan push langsung ke branch `main`.
2. Selalu buat branch baru untuk setiap fitur atau perbaikan.
3. Lakukan sinkronisasi dengan `upstream/main` sebelum ngoding.
4. Gunakan commit message yang jelas.
5. Semua perubahan wajib melalui Pull Request.
6. Jangan menggunakan `git push --force` pada branch `main`.
7. Jangan memasukkan file `.env` atau kredensial ke repository.

## Git Workflow

```text
Repository Utama (upstream)
          |
          v
     Fork Repository
          |
          v
     Clone Repository
          |
          v
    Sinkronisasi Main
          |
          v
     Buat Branch Baru
     (feature/login)
          |
          v
      Coding & Commit
          |
          v
    Push ke Repository Fork
          |
          v
      Create Pull Request
          |
          v
       Code Review
          |
          v
     Approved & Merge
          |
          v
  Repository Utama (main)
```
