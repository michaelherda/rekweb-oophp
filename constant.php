<?php 

// define('NAMA', 'Michael Herda');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

/**
 * 
 */
// class Coba
// {
// 	const NAMA = 'Michael';
// }
 
// echo Coba::NAMA;

/**
 * 
 */
class Coba
{
	
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;