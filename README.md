# Tugas OOP Pertemuan 4 — Sistem Peminjaman Buku

Project PHP berdasarkan tugas mandiri materi OOP: class `Buku`, `Anggota`, dan `Peminjaman`.

## Fitur
- Menampilkan data buku dan status ketersediaan.
- Mencatat data anggota dan jumlah peminjaman.
- Memproses peminjaman serta pengembalian buku.
- Menolak peminjaman buku yang sedang dipinjam.

## Struktur
```text
tugas-oop-pertemuan-4/
├── index.php
├── README.md
└── src/
    ├── Buku.php
    ├── Anggota.php
    └── Peminjaman.php
```

## Cara menjalankan
Pastikan PHP sudah terpasang, lalu jalankan dari folder project:
```bash
php index.php
```

## Konsep OOP yang digunakan
- **Class dan object:** tiga class mewakili buku, anggota, dan transaksi peminjaman.
- **Atribut dan method:** data serta perilaku dikelompokkan dalam class.
- **Constructor:** mengisi nilai awal objek.
- **Parameter dan return value:** method menerima parameter dan mengembalikan status operasi.
- **Enkapsulasi:** atribut menggunakan `private` dan diakses lewat method publik.
- **Relasi antarkelas:** `Peminjaman` menghubungkan objek `Buku` dan `Anggota`.

Inheritance dan polymorphism tidak dipaksakan karena instruksi tugas mandiri pada slide secara spesifik meminta tiga class tersebut.
