<?php 
// class
class Produk{
	public $judul, 
		   $penulis, 
		   $penerbit, 
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;  

	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman= 0, $waktuMain =0, $tipe ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}
	// method & function
	public function label(){
		return "$this->judul,  $this->penerbit";
	}
	public function infolengkap(){

	// komik : fairy tail | hiromishima, shonen jump ( Rp. 10000) - 100 halaman.
	// game : metal gear | hideo kojima, konami (Rp.500000) ~50 jam.
		$str = "{$this->tipe} : {$this->penulis} | {$this->label()} (Rp. {$this->harga})";
		if($this->tipe== "komik") {
			$str .= " - {$this->jmlHalaman} halaman.";
		}else if ($this->tipe == "game") {
			$str .= " ~ {$this->waktuMain} jam.";
		}

		return $str;
	}
}

class CetakInfoProduk{
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->label()} ( Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("fairy tail", "hiromishima", "shonen jump", 10000, 100, 0, "komik");
$produk2 = new Produk("metal gear", "hideo kojima", "konami", 500000, 0, 50, "game" );
// menampilkan info lengkap

echo $produk1->infolengkap();
echo "<br>";
echo $produk2->infolengkap();












