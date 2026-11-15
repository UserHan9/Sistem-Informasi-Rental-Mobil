## Fork Repository

1. Buka repository utama:
   https://github.com/UserHan9/Sistem-Informasi-Rental-Mobil
2. Klik tombol **Fork** di bagian kanan atas.
3. Pilih akun GitHub yang akan digunakan.
4. Tunggu hingga proses fork selesai.
5. Repository akan tersalin ke akun GitHub kamu.

## Clone Repository

Setelah melakukan fork, clone repository hasil fork menggunakan perintah:

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

Buat database MySQL.

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

### 5. Migration

```bash
php artisan migrate
```

seeder untuk data awal:

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

Server Laravel:

```bash
php artisan serve
```

Buka aplikasi melalui browser:

```text
http://127.0.0.1:8000
```

## API / Route Endpoints

Dokumentasi endpoint aplikasi

### Public 

| Method | Endpoint | Deskripsi |
|---|---|---|
| GET | `/` | Halaman utama aplikasi |
| GET | `/login` | halaman login |
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
