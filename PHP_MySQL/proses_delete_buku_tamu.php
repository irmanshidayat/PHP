<?php
    require_once "MySQL_Connection.php";
    session_start();

    $id = $_GET['idTamu'];

    // perintah SQL
    $sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['delete_status'] = 1;
        $_SESSION['delete_message'] = '<strong>Berhasil!!</strong> Data berhasil didelete';
        header("location:halaman_buku_tamu.php");
        // penggunaan header loacation agar lsg mengarahkan halaman
        // header("location:halaman_buku_tamu.php");

        // echo 
        // // script alert dibawah untuk memunculkan popup jika berhasil atau tidak
        // "<script>
        //     alert('Berhasil terhapus');
        //     location.assign('halaman_buku_tamu.php');
        // </script>";
    }else
    {
        $_SESSION['delete_status'] = 0;
        $_SESSION['delete_message'] = '<strong>Gagal!!</strong> Data gagal didelete';
        header("location:halaman_buku_tamu.php");
        // echo 
        //     "<script> 
        //         alert('Gagal Terhapus');
        //         location.assign('halaman_buku_tamu.php');
        //     </script>";
    }
?>