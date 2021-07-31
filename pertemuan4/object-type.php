<?php
// Jualan produk
// Komik
// Game

use Produk as GlobalProduk;

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})<br>";
        return $str;
    }
}

$produk1= new Produk("Nartuto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragonball");

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);
?>