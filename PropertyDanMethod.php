<?php 
// class
class Produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = "0";

	// method & function
	public function label(){
		return "$this->judul,  $this->penerbit";
	}
}



// instance
$produk3 = new Produk;
$produk3->judul="fairy tail";
$produk3->penulis = "hiromishima";
$produk3->penerbit = "shonen jump";
$produk3->harga = 10.000;

 

$produk4 = new Produk();
$produk4->judul="laskar pelangi";
$produk4->penulis="mira lesmana";
$produk4->penerbit ="miles";
$produk4->harga = "400000";

echo "komik :  " . $produk3->label();

echo "<br>";

echo "novel : " . $produk4->label( );





