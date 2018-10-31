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

class CetakInfoProduk{
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->label()} ( Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("fairy tail", "hiromishima", "shonen jump", 10000);
$produk2 = new Produk("metal gear", "hideo kojima", "konami", 500000 );

echo "komik :  " . $produk1->label();
echo "<br>";
echo "game : " . $produk2->label( );
echo "<br>";

// menjalankan method cetak
 $infoproduk1 = new CetakInfoProduk();
 echo $infoproduk1->cetak($produk1);












