 <?php 
// define('NAMA', 'Sani');

// echo NAMA;
// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Sani';
// }

// echo Coba::NAMA;
// gunakan const jika menggunakan class
// const bisa disimpan di dalam class sedangkan define tidak 

// ======MAGIC CONSTANT========
// menampilkan baris dimana constant di tulis
// echo __LINE__;
// // menampilkan alamat file yang bersangkutan 
// echo __FILE__;
// // menampilkan file yg bersangkutan
// echo __DIR__;

class Coba {
	// menampilkan function yang bersangkutan
	// return __FUNCTION__
	// menampilkan posisi class yang bersangkutan
	public $kelas = __CLASS__;

}
$obj = new Coba;
echo $obj->kelas;




















?>