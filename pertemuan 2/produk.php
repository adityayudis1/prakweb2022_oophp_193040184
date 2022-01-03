<?php

class Produk{
    public  $judul = 'judul',
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = 'naruto';
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'GTA 6';
// $produk2->tambahProperty = 'hahaha';
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = 'naruto';
$produk3->penulis = 'masashi kishimoto';
$produk3->penerbit = 'shonen jump';
$produk3->harga = 30000;

// echo "komik : $produk3->penulis,$produk3->penerbit";
// echo "<br>";

// echo $produk3->getLabel();
// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Neil Druckman';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 250000;

// echo $produk4->getLabel();

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();

// var_dump($produk3);