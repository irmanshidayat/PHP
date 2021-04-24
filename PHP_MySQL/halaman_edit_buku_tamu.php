<?php
    require_once "MySQL_Connection.php";

    $id = $_GET['idTamu'];
    $sql = "SELECT * FROM tb_tamu WHERE id_tamu='$id'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $nama = $row['nama_tamu'];
        $email = $row['email_tamu'];
        $pesan = $row['pesan_tamu'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS sendiri -->
    <style>
        body{
            background-image: url(brennan.jpg);   
            background-size: cover;         
        }

        .container{
            color: black;
            /* background-color: indianred; */
            padding: 50px 10px ;
        }

        .card{
            background-color: #F08080 ;
        }

        input {
            width: 100%;
        }
    </style>

    <title>Buku Tamu</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
            <h3 align="center">Form Edit Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="proses_update_buku_tamu.php" method="POST">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" name="id" class="form-control" readonly value="<?=$_GET['idTamu'];?>" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda" required value="<?=$nama;?>">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email anda" required value="<?=$email;?>">
                    </div>

                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan pesan dan kesan anda" required ><?=$pesan;?></textarea>
                    </div>

                    <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update">
                    </div>

                    <div class="form-group">
                        <a href="halaman_buku_tamu.php">
                            <i class="fa fa-arrow-left"></i>Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>