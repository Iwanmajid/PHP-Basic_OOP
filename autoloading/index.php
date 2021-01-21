<?php 

require_once 'App/init.php';

//\\-- Instansiasi Objek diluar Class --//\\
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();