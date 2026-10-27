<?php
declare(strict_types=1);
class Buku {
    private string $judul;
    private string $penulis;
    private string $isbn;
    private bool $tersedia = true;

    public function __construct(string $judul, string $penulis, string $isbn) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->isbn = $isbn;
    }
    public function getJudul(): string { return $this->judul; }
    public function getPenulis(): string { return $this->penulis; }
    public function getIsbn(): string { return $this->isbn; }
    public function isTersedia(): bool { return $this->tersedia; }

    public function pinjam(): bool {
        if (!$this->tersedia) return false;
        $this->tersedia = false;
        return true;
    }
    public function kembalikan(): void { $this->tersedia = true; }
    public function tampilkanInfo(): void {
        echo "Judul       : {$this->judul}\n";
        echo "Penulis     : {$this->penulis}\n";
        echo "ISBN        : {$this->isbn}\n";
        echo "Status      : " . ($this->tersedia ? "Tersedia" : "Sedang dipinjam") . "\n";
    }
}
