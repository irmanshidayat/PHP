<?php
    require_once "MySQL_Connection.php";
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // perintah SQL
    $sql = "INSERT INTO tb_tamu VALUES('','$nama','$email','$pesan')";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['insert_status'] = 1;
        $_SESSION['insert_message'] = '<strong>Berhasil!!</strong> Data berhasil diinsert';
        header("location:halaman_buku_tamu.php");
        // penggunaan header loacation agar lsg mengarahkan halaman
        // header("location:halaman_buku_tamu.php");

        // echo 
        // // script alert dibawah untuk memunculkan popup jika berhasil atau tidak
        // "<script>
        //     alert('Berhasil Tersimpan');
        //     location.assign('halaman_buku_tamu.php');
        // </script>";
    }else
    {
        $_SESSION['insert_status'] = 0;
        $_SESSION['insert_message'] = '<strong>Gagal!!</strong> Data gagal diinsert'. $conn->error;
        header("location:halaman_buku_tamu.php");
        // echo 
        // "<script> 
        //     alert('Gagal Tersimpan');
        //     location.assign('halaman_buku_tamu.php');
        // </script>";
    }
