<?php

class Produk {

        public $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHal,
            $waktuMain,
            $tipe;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $waktuMain = 0, $tipe = "tipe" )
        {
            $this -> judul = $judul;
            $this -> penulis = $penulis;
            $this -> penerbit = $penerbit;
            $this -> harga = $harga;
            $this -> jmlHal = $jmlHal;
            $this -> waktuMain = $waktuMain;
            $this -> tipe = $tipe;
        }

        public function getLabel() {
            return "$this->judul, $this->penulis, $this->penerbit, Rp.($this->harga)";
        }

        public function getInfoLengkap() {
            $str = "$this->tipe : {$this->getLabel()}";

            if ( $this->tipe="game" ) {
                $str .= " - {$this->jmlHal} Halaman.";
            } else if ( $this->tipe="komik" ) {
                $str .= " ~ {$this->waktuMain} Jam.";
            }

            return $str;
        }
}


class CetakInfoProduk {

    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()}";
        return $str;
    }

}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

//Komik : Naruto | Masashi Kishimoto, Shonen Jump, 30000 - 100 halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer, 250000 - 50 jam.
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();