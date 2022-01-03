<?php

// define('NAMA','aditya yudis');

// echo NAMA;

// const UMUR = 26;
// echo "<br>";
// echo UMUR;

// class coba{
//     const NAMA = 'aditya';
// }

// echo coba::NAMA;

// function coba(){
//     return __FUNCTION__;
// }
// echo coba();

class coba{
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
?>