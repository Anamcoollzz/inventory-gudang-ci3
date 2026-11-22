# project_inventorigudang

Aplikasi inventaris gudang berbasis CodeIgniter 3 yang telah di-upgrade agar kompatibel dengan **PHP 8.4** menggunakan [`pocketarc/codeigniter`](https://github.com/pocketarc/codeigniter) dan `mpdf/mpdf` melalui Composer.

## Persyaratan

- PHP `>= 8.4` (ekstensi `mysqli`, `gd`, `mbstring`)
- Composer
- MySQL / MariaDB

## Instalasi

1. **Install dependency via Composer**
   ```bash
   composer install
   ```

2. **Buat database & import SQL**
   Buat database `proj_inventorygudang` lalu import file `application/proj_inventorygudang.sql`:
   ```sql
   CREATE DATABASE IF NOT EXISTS `proj_inventorygudang`;
   ```
   ```bash
   mysql -h 127.0.0.1 -u root -p proj_inventorygudang < application/proj_inventorygudang.sql
   ```

3. **Sesuaikan konfigurasi database**
   Edit `application/config/database.php` sesuai kredensial MySQL lokal Anda (`hostname`, `username`, `password`, `database`).

## Menjalankan Aplikasi

Jalankan built-in PHP server melalui Composer script:

```bash
composer serve
```

Lalu buka di browser:

- http://localhost:8000

## Akun Login Default

| User ID | Password |
| --- | --- |
| `zen` | `zen` |
| `afifah` | `afifah` |
| `lina` | `lina` |
