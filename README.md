# LoginSystem

## Project ini merupakan aplikasi **Login sederhana** berbasis web yang dibuat untuk mempelajari konsep **validasi login** menggunakan **PHP dan MySQL**.

---

## ✨ Fitur

- Login user menggunakan username & password
- Validasi data login
- Proteksi halaman (tidak bisa diakses tanpa login)
- Pesan error jika login gagal
- Struktur kode sederhana dan mudah dipahami

---

## 🛠️ Teknologi yang Digunakan

- **PHP (Native)** – backend logic
- **MySQL / MariaDB** – database
- **HTML & CSS** – tampilan
- **Bootstrap** (opsional, jika digunakan)
- **XAMPP / Laragon** – server lokal

---

## 📁 Struktur Folder

```
log/
├── Admin/
│   └── Dashboard.php
├── Config/
│   └── Connection.php
├── index.php
├── login.php
├── mahasiswa.sql
└── README.md
```

---

## 🗄️ Struktur Database

### Import Database

1. Buka **phpMyAdmin**
2. Buat database baru (contoh: `login_db`)
3. Import file `database.sql`

---

### Contoh Struktur Tabel `users`

| Field    | Tipe    | Keterangan  |
| -------- | ------- | ----------- |
| id       | int     | Primary Key |
| username | varchar | Username    |
| password | varchar | Password    |
| role     | varchar | Peran       |

> Password bisa disimpan dalam bentuk **plaintext** (untuk latihan) atau **hash** (direkomendasikan).

---

## ⚙️ Konfigurasi Database

Edit file:

```
config/koneksi.php
```

Sesuaikan dengan database kamu:

```php
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
```

---

## ▶️ Cara Menjalankan Project

1. Ekstrak folder `log`
2. Pindahkan ke:
   ```
   xampp/htdocs/
   ```
3. Jalankan **Apache & MySQL**
4. Buka browser:
   ```
   http://localhost/log
   ```

---

## 📌 Catatan

- Pastikan ekstensi **mysqli** aktif
- Gunakan PHP minimal versi **7.4**
- Project ini cocok untuk latihan dasar autentikasi

---

## 🎯 Tujuan Pembelajaran

- Memahami konsep session PHP
- Membuat sistem login sederhana
- Mengamankan halaman dengan autentikasi

---

## 👨‍💻 Author

Dzakwan Saputra
