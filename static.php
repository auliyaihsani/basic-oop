<?php 
// Class ContohStatic {
// 	public static $angka = 1;

// 	public static function hallo(){
// 		return "hallo " . self::$angka++ . " kali .";
// 	}
// }
// untuk mengakses method static
// echo ContohStatic::$angka;
// echo "<br>";

// echo ContohStatic::hallo();
// echo "<hr>";
// echo ContohStatic::hallo();

class Contoh {
	public static $angka = 1;

	public function halo(){
		return "halo " . self::$angka++ . "kali .";
	}
}

   
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// nilai static akan bernilai tetap meskipun di instance berulang kali



 ?>