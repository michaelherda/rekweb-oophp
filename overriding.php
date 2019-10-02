<?php 

// Jualan Produk
// komik
// game
 
 class Produk{
 	public  $judul = "judul",
 			$penulis = "penulis",
 			$penerbit = "penerbit",
 			$harga = 0,
 			$jmlHalaman,
 			$waktuMain;
 			

 	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain=0){
 		$this->judul = $judul;
 		$this->penulis = $penulis;
 		$this->penerbit = $penerbit;
 		$this->harga = $harga;
 		$this->jmlHalaman=$jmlHalaman;
 		$this->waktuMain=$waktuMain;
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
 	public jmlHalaman;
 	public function getInfoProduk (){
 		$str = "Game : ". parent::getInfoProduk() . "- {$this->jmlHalaman}";
 		return $str;

 	}

 }

 class Game extends Produk
 {
 	
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




 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
 $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

 echo $produk1->getInfoProduk();
 echo "<br>";
 echo $produk2->getInfoProduk();
 
 
 // echo "Komik: " . $produk1->getLabel();
 // echo "<br>";
 // echo "Game : " . $produk2->getLabel();
 // echo "<br>";


 // $infoProduk1 = new CetakInfoProduk();
 // echo $infoProduk1->cetak($produk1);
 