<?php 

// Jualan Produk
// komik
// game
 
 class Produk{
 	public  $judul,
 			$penulis,
 			$penerbit,
 			$harga = 0;

 	public function sayHello()  {
 		return "hello world";
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

 echo "Komik :  $produk3->penulis, $produk3->penerbit";
 echo "<br>";
 echo $produk3->sayHello();

 