
<!-- penghubung dengan php dibawah -->
<?php
require_once "variableFunction.php";
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
    </style>

    <title>Form Function</title>
  </head>
  <body>
    <!-- lingkaran -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Lingkaran</h3>
          <!-- <button onclick="ShowFormLingkaran()" style="margin-bottom: 10px;">Show Form Lingkaran</button> -->
          <form name="formLingkaran" action="" method="POST">
              <input type="number" name="r" min=0 placeholder="Masukkan r"> <br>
              <input type="submit" name="luasLingkaranBtn" value="Hitung Luas" class="btn-primary"> <br><br>
              <input type="submit" name="kelilingLingkaranBtn" value="Hitung Keliling" class="btn-primary">
              <button type="reset" onclick="reset1()">Reset</button>
              <br>

              <?php
                  if(isset($_POST['luasLingkaranBtn'])){
                      echo "<div id='pesanLingkaran' > Luas Lingkaran dengan jari-jari ".$_POST['r']." adalah : " .luasLingkaran($_POST['r']) . "</div>";  
                  }
                  if(isset($_POST['kelilingLingkaranBtn'])){
                      echo "<div id='pesanLingkaran' > Keliling Lingkaran dengan jari-jari ".$_POST['r']." adalah : " .kelilingLingkaran($_POST['r']) . "</div>"; 
                  } 
              ?>           
          </form> <br><br>

          <script type="text/javascript">
            function reset1(){
              document.getElementById('pesanLingkaran').innerHTML = '';
            }
          </script>

        <!-- <script type="text/javascript">
          function ShowFormLingkaran(){
            const formLingkaran = document.getElementById('formLingkaran')
            if(formLingkaran.style.display == 'none') {
              formLingkaran.style.display = 'block';
            }else{
              formLingkaran.style.display = 'none';
            }
          }
        </script> -->
    </div>

    <!-- Segitiga -->
      <div class="col">
        <h3>Segitiga</h3>
        <form name="formSegitiga" action="" method="POST">
            <input type="number" name="alas" min=0 placeholder="Masukkan Nilai Alas"> 
            <input type="number" name="tinggi" min=0 placeholder="Masukkan Nilai Tinggi"> <br>
            <input type="submit" name="luasSegitigaBtn" value="Hitung Luas" class="btn-primary"> <br><br>
            <input type="number" name="a" min=0 placeholder="Masukkan Nilai a"> 
            <input type="number" name="b" min=0 placeholder="Masukkan Nilai b"> 
            <input type="number" name="c" min=0 placeholder="Masukkan Nilai c"> <br>       
            <input type="submit" name="kelilingSegitigaBtn" value="Hitung Keliling" class="btn-primary">
            <button type="reset" onclick="reset2()">Reset</button>
            <br>

            <?php
                if(isset($_POST['luasSegitigaBtn'])){
                    echo "<div id='pesanSegitiga' > Luas Segitiga dengan alas " .$_POST['alas']. " x tinggi ".$_POST['tinggi']." / 2 adalah : " .luasSegitiga($_POST['alas'],$_POST['tinggi']) . "</div>";  
                }
                if(isset($_POST['kelilingSegitigaBtn'])){
                    echo "<div id='pesanSegitiga' > Keliling Segitiga dengan ".$_POST['a']." + ".$_POST['b']." + ".$_POST['c']." adalah : " .kelilingSegitiga($_POST['a'],$_POST['b'],$_POST['c']) . "</div>"; 
                }
            ?>           
        </form> <br><br>

        <script type="text/javascript">
          function reset2(){
            document.getElementById('pesanSegitiga').innerHTML = '';
          }
        </script>
    </div>  

     <!-- Jajar Genjang -->
      <div class="col">
        <h3>Jajar Genjang</h3>
        <form name="formJajarGenjang" action="" method="POST">
            <input type="number" name="alas" min=0 placeholder="Masukkan Nilai Alas"> 
            <input type="number" name="tinggi" min=0 placeholder="Masukkan Nilai Tinggi"> <br>
            <input type="submit" name="luasJajarGenjangBtn" value="Hitung Luas" class="btn-primary"> <br><br>
            <input type="number" name="a" min=0 placeholder="Masukkan Nilai a"> 
            <input type="number" name="b" min=0 placeholder="Masukkan Nilai b"> 
            <br>        
            <input type="submit" name="kelilingJajarGenjangBtn" value="Hitung Keliling" class="btn-primary">
            <button type="reset" onclick="reset3()">Reset</button>
            <br>

            <?php
                if(isset($_POST['luasJajarGenjangBtn'])){
                    echo "<div id='pesanJajarGenjang' > Luas Jajar Genjang dengan alas ".$_POST['alas']." x tinggi ".$_POST['tinggi']." adalah : " .luasJajarGenjang($_POST['alas'],$_POST['tinggi']). "</div>"; 
                }
                if(isset($_POST['kelilingJajarGenjangBtn'])){
                    echo "<div id='pesanJajarGenjang' > Keliling Jajar Genjang dengan 2 x (".$_POST['a']."+".$_POST['b']." ) adalah : " .kelilingJajarGenjang($_POST['a'],$_POST['b']) . "</div>"; 
                }
            ?>           
        </form>

        <script type="text/javascript">
          function reset3(){
            document.getElementById('pesanJajarGenjang').innerHTML = '';
          }
        </script>
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