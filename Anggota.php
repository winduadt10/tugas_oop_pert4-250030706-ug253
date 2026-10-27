<?php
declare(strict_types=1);
class Anggota {
    private string $nama;
    private string $idAnggota;
    private array $riwayatPeminjaman = [];

    public function __construct(string $nama, string $idAnggota) {
        $this->nama = $nama;
        $this->idAnggota = $idAnggota;
    }
    public function getNama(): string { return $this->nama; }
    public function getIdAnggota(): string { return $this->idAnggota; }
    public function tambahPeminjaman(Peminjaman $peminjaman): void {
        $this->riwayatPeminjaman[] = $peminjaman;
    }
    public function getJumlahPeminjaman(): int { return count($this->riwayatPeminjaman); }
    public function tampilkanInfo(): void {
        echo "Nama        : {$this->nama}\n";
        echo "ID Anggota  : {$this->idAnggota}\n";
        echo "Total pinjam: {$this->getJumlahPeminjaman()}\n";
    }
}
