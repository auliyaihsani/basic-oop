<?php 
// class 
abstract class Produk{
	private $judul, 
		   	$penulis, 
		   	$penerbit,
		    $harga,
			$diskon = 0;
		   

		

	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga; 
	}   


	public function setJudul( $judul ){
		if (!is_string($judul) ) {
			throw new Exception("judul harus string");
		}
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis( $penulis ){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit( $penerbit ){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit (){
		return $this->penerbit;
	}

		public function setDiskon($diskon){
		$this->diskon =$diskon;
	}

		public function getDiskon(){
			return $this->diskon;
		}

	public function setHarga( $harga ){
		$this->harga;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
	// method & function
	public function label(){
		return "$this->judul,  $this->penerbit";
	}

	abstract public function InfoProduk();
	public function info(){
	// komik : fairy tail | hiromishima, shonen jump ( Rp. 10000) - 100 halaman.
	// game : metal gear | hideo kojima, konami (Rp.500000) ~50 jam.
		$str = "{$this->penulis} | {$this->label()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman;

	public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman =0){
		parent::__construct( $judul, $penulis, $penerbit, $harga );
		$this->jmlHalaman = $jmlHalaman;
	}
 	public function InfoProduk(){
 						//mengambil method info yang ada di dalam method abstract 
	$str = "komik: " . $this->info() . " | - {$this->jmlHalaman} halaman.";
		return $str;
 	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){
		parent:: __construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}

	

	public function InfoProduk(){
					//mengambil method info yang ada di dalam method abstract  
	$str = "Game: " . $this->info() . " ~ {$this->waktuMain} jam.";
		return $str;
 	}

 
 }


class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk ){
		$this->daftarProduk[] = $produk;
	}

	public function cetak (){
		$str = "DAFTAR PRODUK : <br>";
		foreach( $this->daftarProduk as $p ) {
			$str .= "- {$p->InfoProduk() } <br>";
		}
	
		return $str; 

	}
}


$produk1 = new Komik("fairy tail", "hiromishima", "shonen jump", 10000, 100);
$produk2 = new Game("metal gear", "hideo kojima", "konami", 500000, 50 );

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);

echo $cetakproduk->cetak();




















