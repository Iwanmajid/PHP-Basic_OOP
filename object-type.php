<?php
// JANGAN LUPA INSTALL XDEBUG
class Produk{
    //property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    //method
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//-- Instansiasi Objek diluar Class --\\
//= implementasi constructor =\\
$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br><br>";

//= implementasi object type =\\
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


