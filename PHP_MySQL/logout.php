<?php  
// wajib ditambahkan if di kode php pada halaman buku tamu 
// if(!isset($_SESSION['login'])){
//     header("location: formLogin.php");
// }
    session_start();
    session_destroy();
    header("location:formLogin.php");
?>