<?php 

// class contohStatic {
//     public static $angka = 1;

//     public static function hello() {
//         return "hello bitch! " . self::$angka++ . " kali";
//     }
// }
// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::hello();
// echo "<hr>";
// echo contohStatic::hello();



class Contoh {
    public static $angka=1;
    public function hello() {
        return "Hello bitch! " . self::$angka++ . " kali <br>";                    
    }
}

$obj = new Contoh;
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();
echo Contoh::$angka;