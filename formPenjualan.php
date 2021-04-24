<!-- penghubung dengan php dibawah -->
<?php
include "functionPenjualan.php";
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
        body {
            /* margin-left: 50px;
            margin-top: 50px; */
            background-image: url(bg2.jpg);
            background-size: cover;
            
        } 

        .container{
            margin-left: 40%;
            margin-top: 10%;
        }
    </style>

    <title>Form Login</title>
</head>

<body>
    <?php
        if(isset($_POST['prosesPembelian'])){
            $jumlahBeli = $_POST['jmlBeli'];

            $totalHarga = totalHarga($jumlahBeli);
            $totalDiskon = totalDiskon($totalHarga, $jumlahBeli);
            $totalBayar = totalBayar($totalHarga, $totalDiskon);
            // var_dump($jumlahBeli);
        }
       
    ?>

    <div class="container">
        <h1>Halaman Penjualan</h1>
        <form action="" method="POST">
            <label for="pb">Jumlah Pembelian</label>
            <input type="number" min="0" name="jmlBeli">
            <br><br>
            <button type="submit" name="prosesPembelian">Pembelian</button> <br><br>
        </form>

        <div>
            <p>Total Harga :
                <?php 
                    if (isset($totalHarga)) {
                        echo "Rp. " . number_format($totalHarga,2,',','.');
                    }
                ?>
            </p>

            <p>Total Diskon :
                <?php 
                    if (isset($totalDiskon)) {
                        echo "Rp. " . number_format($totalDiskon,2,',','.');
                    }
                ?>
            </p>

            <p>Total Bayar :
                <?php 
                    if (isset($totalBayar)) {
                        echo "Rp. " . number_format($totalBayar,2,',','.');
                    }
                ?>
            </p>
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