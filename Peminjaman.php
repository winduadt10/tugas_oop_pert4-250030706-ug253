<?php
declare(strict_types=1);
class Peminjaman {
    private Buku $buku;
    private Anggota $anggota;
    private string $tanggalPinjam;
    private ?string $tanggalKembali = null;
    private bool $aktif = false;

    public function __construct(Buku $buku, Anggota $anggota, ?string $tanggalPinjam = null) {
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggalPinjam = $tanggalPinjam ?? date('d-m-Y');
        if ($this->buku->pinjam()) {
            $this->aktif = true;
            $this->anggota->tambahPeminjaman($this);
        }
    }
    public function isAktif(): bool { return $this->aktif; }
    public function kembalikan(?string $tanggalKembali = null): bool {
        if (!$this->aktif) return false;
        $this->buku->kembalikan();
        $this->tanggalKembali = $tanggalKembali ?? date('d-m-Y');
        $this->aktif = false;
        return true;
    }
    public function tampilkanInfo(): void {
        echo "Buku        : {$this->buku->getJudul()}\n";
        echo "Anggota     : {$this->anggota->getNama()}\n";
        echo "Tgl pinjam  : {$this->tanggalPinjam}\n";
        echo "Tgl kembali : " . ($this->tanggalKembali ?? "-") . "\n";
        $status = $this->aktif ? "Aktif" : ($this->tanggalKembali !== null ? "Selesai" : "Gagal");
        echo "Status      : {$status}\n";
    }
}
