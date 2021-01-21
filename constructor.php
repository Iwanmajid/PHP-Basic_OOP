<?php
// JANGAN LUPA INSTALL XDEBUG
class Produk
{
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
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

//-- Instansiasi Objek diluar Class (isi dengan constructor) --\\
$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Balls");

echo "Komik : " . $produk1->getLabel();
echo "<br><br>";
echo "Game : " . $produk2->getLabel();
echo "<br><br>";
var_dump($produk3);
