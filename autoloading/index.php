<?php 
require_once 'App/init.php';
 

$produk1 = new Komik("fairy tail", "hiromishima", "shonen jump", 10000, 100);
$produk2 = new Game("metal gear", "hideo kojima", "konami", 500000, 50 );

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);

echo $cetakproduk->cetak();





