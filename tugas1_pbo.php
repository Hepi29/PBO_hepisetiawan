<?php
class Kendaraan {
    protected $warna;
    protected $bahan_bakar;
    protected $harga;

    public function __construct($warna, $bahan_bakar, $harga) {
        $this->warna = $warna;
        $this->bahan_bakar = $bahan_bakar;
        $this->harga = $harga;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getBahanBakar() {
        return $this->bahan_bakar;
    }

    public function getHarga() {
        return $this->harga;
    }
}

$motor = new Kendaraan('Merah', 'Bensin', 5000000);
echo "Warna Motor: " . $motor->getWarna() . "\n";
echo "Bahan Bakar Motor: " . $motor->getBahanBakar() . "\n";
echo "Harga Motor: " . $motor->getHarga() . "\n";
?>