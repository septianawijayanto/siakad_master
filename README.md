<h1 align="center">Selamat datang di Sistem Informasi Akademik Sekolah! 👋</h1>

## Apa itu Sistem Informasi Akademik Sekolah?

Web Sistem Informasi Akademik Sekolah yang dibuat berdasarkan pengembangan dari <a href="https://github.com/adhiariyadi"> Adhi Ariyadi </a>. **Sistem Informasi Akademik Sekolah adalah Website untuk para siswa dapat melihat jadwal pelajaran, dan nilai rapot dan para guru dapat menambahkan nilai siswa dengan muda melalui website.**

## Fitur apa saja yang tersedia di Sistem Informasi Akademik Sekolah?

- Autentikasi Admin
- User & CRUD
- Jadwal & CRUD
- Kelas & CRUD
- Mata Pelajaran & CRUD
- Guru & CRUD
- Siswa & CRUD
- Rapot
- Dan lain-lain



---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/septianawijayanto/siakad_master.git
cd Sistem-Informasi-Akademik-Sekolah-Laravel
composer install
npm install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=db_siakad
DB_USERNAME=root
DB_PASSWORD=

```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate

Lalu Impor db_siakad.sql ke database
```

4. **Jalankan website**

```bash
php artisan serve
```





## License

- Copyright © 2020 Adhi Ariyadi.
- **Sistem Informasi Akademik Sekolah is open-sourced software licensed under the MIT license.**
