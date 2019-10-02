<?php 

// Jualan Produk
// komik
// game
 
 class Produk{
 	public  $judul = "judul",
 			$penulis = "penulis",
 			$penerbit = "penerbit";
 			
 	protected
 	$harga = 0;
 			

 	public function __construct($judul, $penulis, $penerbit, $harga){
 		$this->judul = $judul;
 		$this->penulis = $penulis;
 		$this->penerbit = $penerbit;
 		$this->harga = $harga;
 	}


 	public function getLabel(){
 		return "$this->penulis, $this->penerbit";
 	}

 	public function getInfoProduk(){
 		$str = "{$this->judul}|{$this->getLabel()}(Rp. {$this->harga})";
 	
 		return $str;
 	}

 } 

 class Komik extends produk{
 	public $jmlHalaman;

 	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

 		$this->jmlHalaman = $jmlHalaman;

 	}


 	public function getInfoProduk (){
 		$str = "Game : ". parent::getInfoProduk() . "- {$this->jmlHalaman}";
 		return $str;

 	}

 }

 class Game extends Produk
 {
 	public $waktuMain;

 		public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

			$this->waktuMain = $waktuMain;

		}

 	public function getHarga(){
 		return $this->harga;
 	}	  	

 	function getInfoProduk()
 	{
 		$str = "Game : ". parent::getInfoProduk(). " ~ {$this->waktuMain} Jam.";
 		return $str;
 	}
 }

 class CetakInfoProduk{

 	public function cetak(Produk $produk){
 		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
 		return $str;
 	}

 }




 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
 $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

 echo $produk1->getInfoProduk();
 echo "<br>";
 echo $produk2->getInfoProduk();
 echo "<hr>";

 

 echo $produk2->getHarga();

 
 
