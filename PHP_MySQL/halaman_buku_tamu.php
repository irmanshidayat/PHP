<?php
require_once "MySQL_Connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font awsome untuk memasukan lambang icon, buka di fontawesome.com -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- untuk memasukkan live search copy link CSS nya, buka di datatables.net. bersambung pada script dipaling bawah-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


    <style>
        body {
            background-image: url(brennan.jpg);
            background-size: cover;
        }

        .container {
            color: black;
            /* background-color: indianred; */
            padding: 50px 10px;
        }

        .card {
            background-color: #F08080;
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
                <!-- popup insert -->
                <?php
                if (isset($_SESSION['insert_status'])) { ?>
                    <div class="alert <?php if($_SESSION['insert_status'] == 1){echo 'alert-info';}else{echo 'alert-danger';}?> alert-dismissible fade show" role="alert">
                        <?=$_SESSION['insert_message']; ?>
                        <!-- <strong>Selamat!</strong> Data berhasil di insert. -->
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }
                    unset($_SESSION['insert_status']);
                ?>

                <h3 align="center">Form Input Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email anda">
                    </div>

                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan pesan dan kesan anda"></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="kirim">
                    </div>
                </form>

                <!-- alert dibawah ini untuk memunculkan popup jika data berhasil di update, cari di bootstrap lalu ketik alert -->
                <!-- agar alert dibawah dapat berjalan maka tambahkan session_start(); pada php di paling atas dan di file php pada proses_update_buku_tamu-->
                <?php
                if (isset($_SESSION['update_status'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$_SESSION['update_message']; ?>
                        <!-- <strong>Selamat!</strong> Data berhasil di update. -->
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } 
                        unset($_SESSION['update_status']);
                    ?>

                <?php
                if (isset($_SESSION['delete_status'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$_SESSION['delete_message']; ?>
                        <!-- <strong>Selamat!</strong> Data berhasil di hapus. -->
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php }
                    unset($_SESSION['delete_status']);
                ?>

                <h3 class="test-success" align="center">Data Buku Tamu</h3>
                <!-- table dibawah untuk membuat tabel beserta kolom nya -->
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan/Komentar</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td> <?= $no; ?> </td>
                                    <td> <?= $row['id_tamu']; ?> </td>
                                    <td> <?= $row['nama_tamu']; ?> </td>
                                    <td> <?= $row['email_tamu']; ?> </td>
                                    <td> <?= $row['pesan_tamu']; ?> </td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <!-- onclick=return confirm dibawah digunakan untuk memunculkan popup untuk memastikan untuk menghapus file  -->
                                            <a href="proses_delete_buku_tamu.php?idTamu= <?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda akan menghapus record ini?')">
                                                <!-- class pada fa fa-trash buka di fontawsome.com-->
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            <!-- data-nama terhubung di paling bawah -->
                                            <!-- <?= $row['nama_tamu']; ?> terhubung dengan tabel diatas -->
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_tamu']; ?>" data-nama="<?= $row['nama_tamu']; ?>" data-email="<?= $row['email_tamu']; ?>" data-pesan="<?= $row['pesan_tamu']; ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <!-- <a href="halaman_edit_buku_tamu.php?idTamu= <?= $row['id_tamu']; ?>" class="btn btn-dark  btn-sm disabled">
                                                <i class="fa fa-edit"></i>
                                            </a> -->
                                        </div>
                                    </td>
                                </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- copy form dari halaman_edit _buku_tamu.php, lalu hapus value nya -->
                    <!-- perhatikan form action nya sesuai ke file yang digunakan -->
                    <form action="proses_update_buku_tamu.php" method="POST">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" name="id" class="form-control edit-id" readonly required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama" class="form-control edit-nama" placeholder="Masukkan nama anda" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control edit-email" placeholder="Masukkan email anda" required>
                        </div>

                        <div class="form-group">
                            <textarea name="pesan" class="form-control edit-pesan" placeholder="Masukkan pesan dan kesan anda" required></textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Send message</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- ambil link dibawah pada google JQuery di datatables.net -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ambil link dibawah pada JS di datatables.net -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- link dibawah cari di getting started bootstrap paling bawah -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pagelength: 5, // pagelenght: 5 menunjukkan halaman next menjadi 5 atau sesuai keperluan.
            });
            // link dibawah cari di bootstrap lalu ketik Varying modal content
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var nama = button.data('nama')
                var email = button.data('email')
                var pesan = button.data('pesan')
                console.log(nama)
                console.log(email)
                console.log(pesan)
                console.log(id)
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                // modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body .edit-id').val(id) // val disamping berarti value dalam php, karena disini merupakan jQuery.
                modal.find('.modal-body .edit-nama').val(nama)
                modal.find('.modal-body .edit-email').val(email)
                modal.find('.modal-body .edit-pesan').val(pesan)
            })
            $('.alert').delay(500).fadeOut(2000);
        });
    </script>
</body>
</html>