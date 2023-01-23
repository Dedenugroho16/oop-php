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
            return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        }

}


class CetakInfoProduk {

    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()}";
        return $str;
    }

}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$cetak = new CetakInfoProduk(); //object-type

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo $cetak -> cetak($produk1);