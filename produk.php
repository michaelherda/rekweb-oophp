<?php 

// Jualan Produk
// komik
// game
 
 class Produk{
 	public  $judul = "judul",
 			$penulis = "penulis",
 			$penerbi = "penerbit",
 			$harga = 0;

 	public function __construct(){
 		echo "Hello World";
 	}


 	public function getLabel(){
 		return "$this -> penulis, $this -> penerbit";
 	}

 }


 $produk3 = new Produk();
 $produk3->judul = "Naruto";
 $produk3->penulis = "Masashi Kishimoto ";
 $produk3->penerbit = "Shonen Jump";
 $produk3->harga = "30000";

 $produk4 = new Produk();
 $produk4->judul = "Uncharted";
 $produk4->penulis = "Neil Druckman ";
 $produk4->penerbit = "Sony Computer";
 $produk4->harga = "250000";

 echo "<br>";
 echo "Komik: " . $produk3->getLabel();

 echo "<br>";
 echo "Game : " . $produk4->getLabel();

 