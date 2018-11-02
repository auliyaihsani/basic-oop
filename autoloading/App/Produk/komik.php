<?php 

class Komik extends Produk implements InfomasiProduk{
	public $jmlHalaman;

	public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman =0){
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHalaman = $jmlHalaman;
	}
	public function info(){
	// komik : fairy tail | hiromishima, shonen jump ( Rp. 10000) - 100 halaman.
	// game : metal gear | hideo kojima, konami (Rp.500000) ~50 jam.
		$str = "{$this->penulis} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}
 	public function InfoProduk(){
 					
	$str = "komik: " . $this->info() . " | - {$this->jmlHalaman} halaman.";
		return $str;
 	}
}