# CyberTutor

Project Laravel untuk CyberTutor.

## Persyaratan
- PHP >= 7.4
- Composer
- MySQL
- Laravel 7.x atau sesuai versi project
- Web server (opsional: bisa gunakan `php artisan serve`)

## Instalasi dan Menjalankan Project

1. Clone repository:
```bash
git clone https://github.com/shopapp888-spec/CyberTutor
```

2. Masuk ke direktori project:
```bash
cd CyberTutor
```

3. Install dependencies:
```bash
composer install
```

4. Salin file `.env`:
```bash
cp .env.example .env
```

5. Atur konfigurasi database MySQL di `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_anda
DB_PASSWORD=password_anda
```
> Pastikan database sudah dibuat di MySQL sebelum menjalankan migrasi.

6. Generate application key:
```bash
php artisan key:generate
```

7. Jalankan migrasi database:
```bash
php artisan migrate
```

8. Jalankan server Laravel:
```bash
php artisan serve
```

Server akan berjalan di: `http://127.0.0.1:8000`

## Catatan
- Pastikan MySQL sudah berjalan dan user memiliki hak akses ke database.
- Jika menggunakan port berbeda atau server remote, sesuaikan `DB_HOST` dan `DB_PORT`.
