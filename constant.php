<?php 


// define('NAMA', 'Dede Nugroho');
// echo NAMA;
// echo "<br>";

// const UMUR = 19;
// echo UMUR;


// class Coba {
//     const PACAR = 'Dewi Titiyasari';
// }

// echo Coba::PACAR;


// magic constant

// echo __FILE__; 
// hasilnya ketika dijalankan => C:\xampp\htdocs\oop-php\constant.php

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas
;









?>