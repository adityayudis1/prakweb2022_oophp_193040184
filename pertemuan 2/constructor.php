<?php

class Produk{
    public  $judul = 'judul',
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga = 0;

    public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 300000 );
$produk2 = new Produk( "GTA 6", "Dan Houser", "RockStar", 666666 );
$produk3 = new Produk( "Bleach" );

echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();
var_dump($produk3);