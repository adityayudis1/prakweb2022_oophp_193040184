<?php

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0,
        $jmlHalaman=0, $waktuMain=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";       
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})
        - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})
        - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
        return $str;
    }

}
$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "komik" );
$produk2 = new Game( "GTA 6", "Dan Houser", "RockStar", 666666, 0, 50, "game" );

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 300000) - 100 halaman.
// Game : GTA 6 | Dan Houser, Rockstar (Rp. 250000) - 50 jam.




// echo "komik :" . $produk1->getLabel();
// echo "<br>";
// echo "game :" . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);