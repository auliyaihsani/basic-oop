<?php 
// class
class Produk{
	public $judul, 
		   $penulis, 
		   $penerbit, 
		   $harga,
		   $jmlHalaman,
		   $waktuMain;
		   

	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman= 0, $waktuMain =0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	
	}
	// method & function
	public function label(){
		return "$this->judul,  $this->penerbit";
	}
	public function InfoProduk(){

	// komik : fairy tail | hiromishima, shonen jump ( Rp. 10000) - 100 halaman.
	// game : metal gear | hideo kojima, konami (Rp.500000) ~50 jam.
		$str = "{$this->penulis} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{
 	public function InfoProduk(){	
	$str = "komik: {$this->penulis} | {$this->label()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
		return $str;
 	}

}

class Game extends Produk {
	public function InfoProduk(){	
	$str = "Game: {$this->penulis} | {$this->label()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
		return $str;
 	}
}


class CetakInfoProduk{
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->label()} ( Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("fairy tail", "hiromishima", "shonen jump", 10000, 100, 0);
$produk2 = new Game("metal gear", "hideo kojima", "konami", 500000, 0, 50 );

// menampilkan info produk melalui class yang telah extends pada class produk
echo $produk1->InfoProduk();
echo "<br>";
echo $produk2->InfoProduk();












