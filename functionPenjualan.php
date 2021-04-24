<?php
    
    $harga = 9000;
    $diskon = 0.05;

    function totalHarga($jumlahBeli){
        global $harga;

        $jmlhTotalHarga = $harga * $jumlahBeli;

        return $jmlhTotalHarga;
    }

    function totalDiskon($totalHarga, $jumlahBeli){
        global $diskon;
        if ($jumlahBeli > 36){
            $jmlhTotalDiskon = $totalHarga * $diskon;
        }else{
            $jmlhTotalDiskon = $totalHarga * 0;
        }
        
        return $jmlhTotalDiskon;
    }

    function totalBayar($totalHarga, $totalDiskon){
        $totalBayar = $totalHarga - $totalDiskon;
        return $totalBayar;
    }

?>