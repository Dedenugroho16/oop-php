<?php

class Produk {

        public $judul, 
            $penulis,
            $penerbit,
            $harga;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
        {
            $this -> judul = $judul;
            $this -> penulis = $penulis;
            $this -> penerbit = $penerbit;
            $this -> harga = $harga;
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