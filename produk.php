<?php 

// Jualan Produk
// komik
// game
 
 class Produk{
 	public  $judul,
 			$penulis,
 			$penerbit,
 			$harga = 0;

 	// public function sayHello()  {
 	// 	return "hello world";
 	// }


 	public function getLabel(){
 		return "$this -> penulis, $this -> penerbit";
 	}

 }

 // $produk1 = new Produk();
 // $produk1->judul="Naruto";

 // $produk2 = new Produk();
 // $produk2->judul = "Uncharted";

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

 