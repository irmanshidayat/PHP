<?php
require_once "MySQL_Connection.php";
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

// username dan email sesuaikan nama kolom di database
$cekDataUser = "SELECT * FROM tb_login WHERE (username = '$user' OR email = '$user') AND password = '$pass' "; 
$result = $conn->query($cekDataUser);

if ($result->num_rows > 0) {
    // $_SESSION['cekLogin'] = true;
    $_SESSION['login'] = 1;
    $_SESSION['pesan_login'] = 'Selamat datang di Halaman Buku';
    header("location:halaman_buku_tamu.php");
}else{
    $_SESSION['login'] = 0;
    $_SESSION['pesan_login'] = 'Password atau username salah';
    header("location:formLogin.php");
}

?>