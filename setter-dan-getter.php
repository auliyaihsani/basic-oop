<?php 
// class
class Produk{
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

	public function InfoProduk(){

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
	$str = "komik: " . parent::InfoProduk() . " | - {$this->jmlHalaman} halaman.";
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
	$str = "Game: " . parent::InfoProduk() . " ~ {$this->waktuMain} jam.";
		return $str;
 	}

 
 }





class CetakInfoProduk{
	public function cetak ( Produk $produk ){
		$str = "{$produk->judul} | {$produk->label()} ( Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("fairy tail", "hiromishima", "shonen jump", 10000, 100);
$produk2 = new Game("metal gear", "hideo kojima", "konami", 500000, 50 );

// menampilkan info produk melalui class yang telah extends pada class produk
echo $produk1->InfoProduk(); 
echo "<br>";
echo $produk2->InfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getharga();
echo "<hr>";

// memanggil method seter and getter
$produk1->setJudul("high school dxd");
echo $produk1->getJudul();


echo "<br>";
$produk1->setPenulis("Mohammad Auliya Ihsani");
echo $produk1->getPenulis();


echo "<br>";
$produk1->setPenerbit("Gramedia");
echo $produk1->getPenerbit();
















