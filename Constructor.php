<?php 
// class
class Produk{
	public $judul, 
		   $penulis, 
		   $penerbit, 
		   $harga; 


	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// method & function
	public function label(){
		return "$this->judul,  $this->penerbit";
	}
}

$produk1 = new Produk("fairy tail", "hiromishima", "shonen jump", 10.000);
$produk2 = new Produk("metal gear", "hideo kojima", "konami", 500000 );
$produk3 = new Produk("naruto");

echo "komik :  " . $produk1->label();
echo "<br>";
echo "game : " . $produk2->label( );
echo "<br>";
var_dump($produk3);













