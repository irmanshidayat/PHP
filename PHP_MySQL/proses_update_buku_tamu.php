<?php
    require_once "MySQL_Connection.php";

    // start session
    session_start();

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // perintah SQL
    $sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

    // eksekusi perintah
    if($conn->query($sql) === true){
        $_SESSION['update_status'] = 1;
        $_SESSION['update_message'] = '<strong>Berhasil!!</strong> Data berhasil diupdate';
        header("location:halaman_buku_tamu.php");

        // penggunaan header loacation agar lsg mengarahkan halaman
        // header("location:halaman_buku_tamu.php");
        

        // echo 
        // script alert dibawah untuk memunculkan popup jika berhasil atau tidak
        // "<script>
        //     alert('Berhasil Terupdate');
        //     location.assign('halaman_buku_tamu.php');
        // </script>";
    }else
    {   
        $_SESSION['update_status'] = 0;
        $_SESSION['update_message'] = '<strong>Gagal!!</strong> Data gagal diupdate';
        header("location:halaman_buku_tamu.php");
        // echo 
    //     "<script> 
    //         alert('Gagal Terupdate');
    //         location.assign('halaman_buku_tamu.php');
    //     </script>";
    }
?>