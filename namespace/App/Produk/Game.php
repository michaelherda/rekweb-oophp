<?php class Game extends Produk implements InfoProduk
 {
 	public $waktuMain;

 		public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

			$this->waktuMain = $waktuMain;

		}  	

		public function getInfo(){
			$str ="{$this->judul} | {$this->getLabel()} ({$this->harga})";

			return $str;
		}

 	function getInfoProduk()
 	{
 		$str = "Game : ". $this->getInfo(). " ~ {$this->waktuMain} Jam.";
 		return $str;
 	}
 }