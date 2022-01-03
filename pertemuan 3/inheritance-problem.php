<?php

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0,
        $jmlHalaman=0, $waktuMain=0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 300000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";            
        } else if($this->tipe == "game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
        return $str;
    }

}
$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "komik" );
$produk2 = new Produk( "GTA 6", "Dan Houser", "RockStar", 666666, 0, 50, "game" );

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();




// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 300000) - 100 halaman.
// Game : GTA 6 | Dan Houser, Rockstar (Rp. 250000) - 50 jam.




// echo "komik :" . $produk1->getLabel();
// echo "<br>";
// echo "game :" . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);