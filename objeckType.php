<?php 
class People {
    public $judul, $penerbit, $penulis, $harga;
    public function __construct( $judul, $penerbit, $penulis, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->penerbit = $penerbit;
    }   
    public function ulala () {
        return "$this->judul, $this->penulis";
    }
}
class AmbilSemua {
    public function semua ( People $wadah ) {
        $str = "{$wadah->ulala()} | $wadah->penerbit, (Rp. $wadah->harga)";
        return $str;
    }
}
$buku = new People("naruto", "kishi", "oskar", 3000);
$bukuGambar = new People("lifeTo", "wadi", "fausan", 3000);
echo $buku->ulala(); echo "<hr>";
$infoProduk = new AmbilSemua();
echo $infoProduk->semua($bukuGambar);


?>