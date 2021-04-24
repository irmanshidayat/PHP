<!-- penghubung dengan php dibawah -->
<?php
include "functionLogin.php";
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
            /* margin-left: 50px; */
            margin-top: 50px;
            text-align: center;
            /* background-color: dodgerblue; */
        }

        .jumbotron{
            background-image: url(bg1.jpg);
            background-size: cover;
            width: 100%;
            height: 100%;
            /*position absolute biar gampang gesernya dan wajib setelah relative*/
            position: absolute;
            bottom: 0;
        }

        h1, .display-4 {
            font-weight: 500;
            color: lightpink;
            margin-bottom: 50px;
        }

        .container {
            /* background-color: gold; */
            width: 30%;
            padding-top: 50px;
            padding-bottom: 50px;
            border-radius: 50px;
            background-image: url(brennan.jpg);
        }

        p{
            font-weight: 500;
            font-size: 30px;
            color: gold;
        }

        span{
            font-weight: 500;
            font-size: 15px;
            color: gold;
        }

        button{
           background-color: gold;
           border-radius: 10px;
        }

        input{
            border-radius: 5px;
        }
    </style>

    <title>Form Login</title>
</head>

<?php
if (isset($_POST['pass'])) {
    $username = $_POST['usern'];
    $password = $_POST['pass'];
    // function
    login($username, $password);
}
?>

<body>
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">LOGIN</h1>
        <div class="container">
            <form class="form" name="formLogin" action="" method="post">
                <label for="user"> <p> Username </p></label> <br>
                <input type="text" name="usern" id="user" placeholder="Masukkan Username" required>
                <br><br>
                <label for="pass"> <p> Password </p></label> <br>
                <input type="password" name="pass" id="pass" placeholder="Masukkan Password" required>
                <br><br>
                <input type="checkbox" id="showpass" onclick="showPass()">
                <label for="showpass" id="shpass"><span> Show pass </span></label>
                <br>
                <button type="submit">Login</button>
            </form>
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

<script>
    function showPass() {
        var pass = document.getElementById("pass").type;
        if (pass == 'password') {
            document.getElementById("pass").type = 'text';
        } else {
            document.getElementById("pass").type = 'password';
        }
    }
</script>


</html>