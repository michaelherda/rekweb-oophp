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
 			$waktuMain,
 			$tipe;

 	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman=0, $waktuMain=0, $tipe){
 		$this->judul = $judul;
 		$this->penulis = $penulis;
 		$this->penerbit = $penerbit;
 		$this->harga = $harga;
 		$this->jmlHalaman=$jmlHalaman;
 		$this->waktuMain=$waktuMain;
 		$this->tipe =$tipe;
 	}


 	public function getLabel(){
 		return "$this->penulis, $this->penerbit";
 	}

 	public function getInfoLengkap(){
 		$str = "{$this->tipe} :{$this->judul}|{$this->getLabel()}(Rp. {$this->harga})";
 		if ($this->tipe == "Komik") {
 			$str .= "- {$this->jmlHalaman} Halaman. ";
 		}else if($this->tipe == "Game") {
 			$str .= "~ {$this->waktuMain} Jam. ";
 		}

 		return $str;
 	}

 } 

 class Komik extends produk{


 }


 class CetakInfoProduk{
 	public function cetak(Produk $produk){
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
 		return $str;
 	}

 }




 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
 $produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

 echo $produk1->getInfoLengkap();
 echo $produk2->getInfoLengkap();
 
 
 // echo "Komik: " . $produk1->getLabel();
 // echo "<br>";
 // echo "Game : " . $produk2->getLabel();
 // echo "<br>";


 // $infoProduk1 = new CetakInfoProduk();
 // echo $infoProduk1->cetak($produk1);
 