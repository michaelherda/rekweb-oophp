<?php 

// Jualan Produk
// komik
// game

interface InfoProduk{
	public function getInfoProduk();
}
 
 class Produk{
 	private  $judul = "judul",
 			$penulis = "penulis",
 			$penerbit = "penerbit",
 			$harga = 0, 
 			$diskon = 0;
 			
 			
 			

 	public function __construct($judul, $penulis, $penerbit, $harga){
 		$this->judul = $judul;
 		$this->penulis = $penulis;
 		$this->penerbit = $penerbit;
 		$this->harga = $harga;
 	}

 	public function setJudul($judul){

 		$this->judul=$judul;
 	} 

 	public function getJudul(){
 		return $this->judul;
 	}

 	public function setPenulis($penulis){
 		$this->penulis = $penulis;
 	}

 	public function getPenulis(){
 		return $this->penulis;
 	}

 	public function setPenerbit($penerbit){
 		$this->penerbit=$penerbit;
 	}

 	public function getPenerbit(){
 		return $this->penerbit;
 	}

 	public function setDiskon($diskon){
 		$this->diskon = $diskon;
 	}

 	public function getDiskon(){
 		return $this->diskon ;
 	}

 	public function setHarga($harga){
 		$this->harga=$harga;
 	}

 	public function getHarga(){
 		return $this->harga - ($this->harga * $this->diskon / 100);
 	}	


 	public function getLabel(){
 		return "$this->penulis, $this->penerbit";
 	}

 
 		
 	public function getInfo(){
 		$str = "{$this->judul}|{$this->getLabel()}(Rp. {$this->harga})";
 	
 		return $str;
 	}

 } 

 class Komik extends produk implements InfoProduk{
 	public $jmlHalaman;

 	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

 		$this->jmlHalaman = $jmlHalaman;

 	}


 	public function getInfoProduk (){
 		$str = "Game : ". $this->getInfo() . "- {$this->jmlHalaman}";
 		return $str;

 	}

 }

 class Game extends Produk implements InfoProduk
 {
 	public $waktuMain;

 		public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

			$this->waktuMain = $waktuMain;

		}  	

 	function getInfoProduk()
 	{
 		$str = "Game : ". $this->getInfo(). " ~ {$this->waktuMain} Jam.";
 		return $str;
 	}
 }

 class CetakInfoProduk{
 	public $daftarProduk = array();


 	public function tambahProduk(Produk $produk){
 		$this->daftarProduk[] = $produk;
 	}


 	public function cetak(){
 		$str = "DAFTAR PRODUK : <br>";

 		foreach ($this->daftarProduk as $p ) {
 			$str .="~{$p->getInfoProduk()} <br>";
 	}	

 		return $str;
 	}

 }





 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
 $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

 $cetakProduk = new CetakInfoProduk();
 $cetakProduk->tambahProduk($produk1);
 $cetakProduk->tambahProduk($produk2);
 echo $cetakProduk->cetak();


 


 
 