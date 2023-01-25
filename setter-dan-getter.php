<?php

class Produk {

        private $judul, $penulis, $penerbit, $harga, $diskon=0;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
        {
            $this -> judul = $judul;
            $this -> penulis = $penulis;
            $this -> penerbit = $penerbit;
            $this -> harga = $harga;
        }

        public function setJudul( $judul ) {
            if( !is_string($judul) ) {
                throw new Exception("Judul harus string");
            }
            $this->judul=$judul;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setPenulis($penulis) {
            $this->penulis=$penulis;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenerbit($penerbit) {
            $this->penerbit=$penerbit;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }

        public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
        }

        public function getDiskon() {
            return $this->diskon;
        }

        public function setHarga( $harga ) {
            $this->harga=$harga;
        }

        public function getHarga() {
            return $this->harga - ( $this->harga * $this->diskon / 100 );
        }

        public function getLabel() {
            return "$this->judul, $this->penulis, $this->penerbit, Rp.($this->harga)";
        }

        public function getInfoProduk() {
            $str = "{$this->getLabel()}";
            return $str;
        }
}


class Komik extends Produk {
        public $jmlHal;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 )
        {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmlHal = $jmlHal;
        }

        public function getInfoProduk()
        {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHal} Halaman.";
            return $str;
        }
}


class Game extends Produk {
        public $waktuMain;

        public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0 )
        {
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->waktuMain=$waktuMain;
        }
    
        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() .  " ~ {$this->waktuMain} Jam.";
            return $str;
        }
}


// class CetakInfoProduk {

//     public function cetak( Produk $produk ) {
//         $str = "{$produk->getLabel()}";
//         return $str;
//     }

// }


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
$produk3 = new Game("PES2017", "awikwok", "EA GAMES", 51000, 12);

//Komik : Naruto | Masashi Kishimoto, Shonen Jump, 30000 - 100 halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer, 250000 - 50 jam.
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<hr>";


// visibility 
// 1. public = bisa diakses dimana saja
// 2. protected = bisa diakses oleh child class dari parent class
// 3. private = hanya bisa diakses oleh class tertentu saja

$produk2->setDiskon(50);
echo $produk2->getHarga(); 
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();