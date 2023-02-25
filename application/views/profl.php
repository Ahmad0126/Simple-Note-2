<?php
// session_start();
// if(!isset($_SESSION['username'])){
//     header("Location: login.html");
// }
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "simple_note";
// $conn = mysqli_connect($servername, $username, $password, $database);
// if (!$conn){
//     die("connection failed: ".mysqli_connect_error());
// }
// $user = $_SESSION['username'];
// $query = "SELECT * FROM users WHERE username='$user'";
// $fer = mysqli_query($conn, $query);
// while ($f = mysqli_fetch_array($fer)) {
//     $nama = $f['nama'];
//     $email = $f['email'];
//     $pass = $f['sandi'];
// }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>main.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
        .vace{
            color: red;
        }
    </style>
    <title>Profil Anda</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="forum">
            <h1 class="text-center">Ubah Profil</h1>
            <?php
            $nama = $profile->nama;
            $email = $profile->email;
            ?>
            <form method="post" action="<?= base_url('User/profile'); ?>">
                <label>Nama</label>
                <input name="nama" class="form-control" type="text" value="<?= $nama ?>" placeholder="Masukkan Nama Lengkap" required>
                <label class="pt-4">Email</label>
                <input name="email" class="form-control" type="text" value="<?= $email ?>" placeholder="Masukkan Email Anda" required>
                <br>
                <label>Konfirmasi Password</label>
                <input name="pl" class="form-control" type="password" placeholder="Konfirmasi Password" required>
                <?php echo $this->session->flashdata('pesan'); ?>
                <br>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="<?= base_url('User/password'); ?>" class="btn btn-primary">UBAH SANDI</a>
                    <a href="<?= base_url('User/'); ?>" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>