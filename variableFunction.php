<?php
    // Luas dan keliling segitiga
    function luasSegitiga($alas, $tinggi){
        $luas=$alas*$tinggi*0.5;
        return $luas;
    }

    // echo "Luas segitiga adalah " .luasSegitiga(5,5);

    // echo "<br><br>";

    function kelilingSegitiga($a,$b,$c){
        $keliling=$a+$b+$c;
        return $keliling;
    }

    // echo "Keliling seigitiga adalah " .kelilingSegitiga(10,10,10);

    // echo "<br><br>";

    // Luas dan Keliling Lingkaran
    function luasLingkaran($r){
        $luas=3.14*$r*$r;
        return $luas;
    }

    // echo "Luas Lingkaran adalah " .luasLingkaran(15);

    // echo "<br><br>";

    function kelilingLingkaran($r){
        $keliling=3.14*($r+$r);
        return $keliling;
    }

    // echo "Keliling Lingkaran adalah " .kelilingLingkaran(25);

    // echo "<br><br>";

    // Luas dan Keliling Jajar Genjang
    function luasJajarGenjang($alas,$tinggi){
        $luas=$alas*$tinggi;
        return $luas;
    }

    // echo "Luas Jajar Genjang adalah " .luasJajarGenjang(7,7);

    // echo "<br><br>";

    function kelilingJajarGenjang($a,$b){
        $keliling=2*($a+$b);
        return $keliling;
    }

    // echo "Keliling Jajar Genjang adalah " .kelilingJajarGenjang(8,8);

    // echo "<br><br>";
?>