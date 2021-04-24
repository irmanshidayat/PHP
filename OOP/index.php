<?php
require_once 'myClass.php';
if(isset($_POST['hitung'])){
    $myLingkaran = new Lingkaran($_POST['r']);
}
?>

<!-- HTML -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS Sendiri -->
    <style>
        body{
            margin-left: 50px;
            margin-top: 50px;
        }

        .container{
            width: 500px;
            background-color: gold;
            margin-top: 50px;
            padding-top: 20px;
        }

        h1{
            background-color: ;
        }
    </style>

    <title>Form Function</title>
  </head>
  <body>
    <?php
    // pembuatan objek
    $pesawatA = new PesawatTerbang('abu-abu');
    echo "Warna pesawat di awal : " .
        $pesawatA->getWarna();

    echo "<br>";

    // memberikan nilai
    $pesawatA->setWarna('merah');

    // mendapatkan nilai
    echo "Warna pesawat A adalah : " .
        $pesawatA->getWarna();

    echo "<br>";
    echo "<hr>";

    // mobil
    $mobilA = new Mobil('Merah');
    echo "Warna Mobil A adalah : " . $mobilA->getWarna();
    echo "<br>";
    echo "Kecepatan Mobil A adalah : " . $mobilA->getKecepatan();
    $mobilA->tambahKecepatan(20);
    echo "<br>";
    echo "Kecepatan Mobil A adalah : " . $mobilA->getKecepatan();
    $mobilA->tambahKecepatan(50);
    echo "<br>";
    echo "Kecepatan Mobil A adalah : " . $mobilA->getKecepatan();

    echo "<br>";
    echo "<hr>";

    // pemanggilan class child
    $mobilB = new MobilBalap('Biru');
    echo "Warna Mobil B adalah : " . $mobilB->getWarna();
    echo "<br>";
    echo "Kecepatan Mobil B adalah : " . $mobilB->getKecepatan();
    $mobilB->tambahKecepatan(10);
    echo "<br>";
    echo "Kecepatan Mobil B adalah : " . $mobilB->getKecepatan();
    $mobilB->tambahKecepatan(10);
    echo "<br>";
    echo "Kecepatan Mobil B adalah : " . $mobilB->getKecepatan();
    $mobilB->tambahKecepatan(20);
    echo "<br>";
    echo "Kecepatan Mobil B adalah : " . $mobilB->getKecepatan();

    echo "<br>";
    echo "<hr>";

    // ------------
    $lingkaran = new Lingkaran(5);
    echo 'Keliling Lingkaran : ' . $lingkaran->getKeliling();
    echo '<br>';
    echo 'Luas Lingkaran : ' . $lingkaran->getLuas();

    echo "<br>";
    ?>

    <div class="container" mt-4>
        <div class="card">
            <div class="card-header">
                <h1>Form Hitung Luas dan Keliling Lingkaran</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="number" name="r" class="form-control" required placeholder="Masukkan Nilai r (jari-jari)">
                </div>
                <input type="submit" name="hitung" value="Hitung" class="btn btn-primary btn-block">
            </form>

            <?php
                if(isset($_POST['hitung'])){ ?>
                    <div class="alert alert-warning alert-dismissable fade show mt-3" role="alert">
                        <div>Nilai r Lingkaran adalah : <?= $_POST['r'] ?> </div>
                        <div>Luas Lingkaran adalah : <?= $myLingkaran->getLuas() ?> </div>
                        <div>Keliling Lingkaran adalah : <?= $myLingkaran->getKeliling() ?> </div>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">Reset</span></button>
                    </div>
                <?php } ?>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>