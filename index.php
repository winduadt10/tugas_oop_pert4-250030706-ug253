<?php
declare(strict_types=1);
require_once __DIR__ . '/src/Buku.php';
require_once __DIR__ . '/src/Anggota.php';
require_once __DIR__ . '/src/Peminjaman.php';

function garis(): void { echo str_repeat("=", 48) . PHP_EOL; }
function judul(string $teks): void {
    garis();
    echo $teks . PHP_EOL;
    garis();
}

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", "9789793062792");
$buku2 = new Buku("Bumi", "Tere Liye", "9786020332956");
$anggota = new Anggota("Windu", "AG001");

judul("SISTEM PEMINJAMAN BUKU");
echo PHP_EOL;

judul("1. DAFTAR BUKU");
echo "[Buku 1]\n";
$buku1->tampilkanInfo();
echo PHP_EOL . "[Buku 2]\n";
$buku2->tampilkanInfo();
echo PHP_EOL;

judul("2. PROSES PEMINJAMAN");
$peminjaman1 = new Peminjaman($buku1, $anggota);
echo $peminjaman1->isAktif()
    ? "Peminjaman berhasil!\n\n"
    : "Peminjaman gagal: buku tidak tersedia.\n\n";
$peminjaman1->tampilkanInfo();
echo PHP_EOL;

judul("3. UJI PEMINJAMAN GANDA");
$peminjaman2 = new Peminjaman($buku1, $anggota);
echo $peminjaman2->isAktif()
    ? "Peminjaman berhasil.\n"
    : "Peminjaman ditolak: buku sedang dipinjam.\n";
echo PHP_EOL;

judul("4. PROSES PENGEMBALIAN");
echo $peminjaman1->kembalikan()
    ? "Buku berhasil dikembalikan.\n\n"
    : "Pengembalian gagal: transaksi tidak aktif.\n\n";
$buku1->tampilkanInfo();
echo PHP_EOL;

judul("5. DATA ANGGOTA");
$anggota->tampilkanInfo();
garis();
