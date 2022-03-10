<?php

class Produk{
    public $Judul;
    //membuat isi property secara default
    public $Penulis = "Penulis";
    public $Penerbit;
    public $Harga ;
}

$Komik = new Produk();
//membuat isi secara manual 
$Komik->Judul = "Naruto";
$Komik->Penulis = "Masashi Kisihimoto";
$Komik->Penerbit = "Shonen";

$Game = new Produk();
$Game->Judul = "Bashara";

var_dump($Komik);

