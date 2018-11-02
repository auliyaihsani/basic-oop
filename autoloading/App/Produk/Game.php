<?php 
class Game extends Produk implements InfomasiProduk  {
	public $waktuMain;

	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){
		parent:: __construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}

	public function info(){
	// komik : fairy tail | hiromishima, shonen jump ( Rp. 10000) - 100 halaman.
	// game : metal gear | hideo kojima, konami (Rp.500000) ~50 jam.
		$str = "{$this->penulis} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}
	

	public function InfoProduk(){
					//mengambil method info yang ada di dalam method abstract  
	$str = "Game: " . $this->info() . " ~ {$this->waktuMain} jam.";
		return $str;
 	}

 
 }