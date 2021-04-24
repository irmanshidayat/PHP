<?php
    // memasukkan nilai ke dalam array
    $mobil=array("volvo", "BMW", "Toyota");

    // array diurutkan secara ascending
    sort($mobil);

    // mendapatkan jumlah nilai dari array $mobil
    $lenght=count($mobil);

    // Dengan looping menampilkan tiap nilai dari array
    for($x=0; $x < $lenght; $x++) {
        echo $mobil[$x];
        echo "<br/>";
    }
?>