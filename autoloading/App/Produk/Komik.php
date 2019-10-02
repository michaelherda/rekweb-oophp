 <?php class Komik extends Produk implements InfoProduk{
 	public $jmlHalaman;

 	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman=0){

 		parent:: __construct($judul, $penulis, $penerbit, $harga);

 		$this->jmlHalaman = $jmlHalaman;

 	}

 	public function getInfo(){
 		$str ="{$this->judul} | {$this->getLabel()} ({$this->harga})";

			return $str;
 	}


 	public function getInfoProduk (){
 		$str = "Game : ". $this->getInfo() . "- {$this->jmlHalaman}";
 		return $str;

 	}

 }