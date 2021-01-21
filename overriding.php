<?php
// class parent
class Produk
{
    //property
    public  $judul,
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

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// class child
class Komik extends Produk
{
    //property
    public $jmlHalaman;

    //method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// class child
class Game extends Produk
{
    //property
    public $waktuMain;

    //method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// class parent
class CetakInfoProduk
{
    //method
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//\\-- Instansiasi Objek diluar Class --//\\
//\= implementasi constructor =/\\
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br><br>";

//\= implementasi object type =/\\
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

//\= implementasi inheritance =/\\
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
