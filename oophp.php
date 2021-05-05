<?php 
// Object Type.php
class Produk {
  public $judul,$penulis,$penerbit,$harga;
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
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
  public function cetak( Produk $produ ) {
    $str = "{$produ->judul} | {$produ->getLabel()} (Rp. {$produ->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2 = new Produk("Life","Kuskus","Wolan", 40000);
echo "Komik : " . $produk1->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo "Games : " . $infoProduk1->cetak($produk2);

