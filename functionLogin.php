<?php
    function login($username, $password){
        if($username == "pengguna" && $password == "password"){
            header("location:formPenjualan.php");
        }
        else
        {
            echo "<script>
                    alert('Username dan Password anda Salah');
                </script>";
        }

    }
?>