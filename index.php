<?php

echo "Animal <br>";
echo "<hr>";

class Kucing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new Kucing;
$kucing->nama = "Junkyu";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "tidak";
$kucing->suara = "meoong";


echo "Kucing <br>";
echo "nama : $kucing->nama <br>";
echo "jumlah kaki : $kucing->jumlah_kaki <br>";
echo "bisa terbang : $kucing->bisa_terbang <br>";
echo "suaranya : $kucing->suara <br>";
echo "<hr>";

class Anjing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$anjing = new Anjing;
$anjing->nama = "Asahi";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "tidak";
$anjing->suara = "guuukk";


echo "Anjing <br>";
echo "nama : $anjing->nama <br>";
echo "jumlah kaki : $anjing->jumlah_kaki <br>";
echo "bisa terbang : $anjing->bisa_terbang <br>";
echo "suaranya : $anjing->suara <br>";
echo "<hr>";

class Elang {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$elang = new Elang;
$elang->nama = "Mashi";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "bisa";
$elang->suara = "miipp";


echo "Elang <br>";
echo "nama : $elang->nama <br>";
echo "jumlah kaki : $elang->jumlah_kaki <br>";
echo "bisa terbang : $elang->bisa_terbang <br>";
echo "suaranya : $elang->suara <br>";
echo "<hr>";

class Angsa {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$angsa = new Angsa;
$angsa->nama = "Ochi";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "bisa";
$angsa->suara = "kwaaakk";


echo "Angsa <br>";
echo "nama : $angsa->nama <br>";
echo "jumlah kaki : $angsa->jumlah_kaki <br>";
echo "bisa terbang : $angsa->bisa_terbang <br>";
echo "suaranya : $angsa->suara <br>";
echo "<hr>"; 
