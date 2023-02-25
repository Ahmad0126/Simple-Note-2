<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>main.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <title>Log In Simple Note</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="invisible">
            <img src="IMG-20221031-WA0001.jpg" alt="">
        </div>
        <div class="forum position-absolute top-50 start-50 translate-middle">
            <h1 class="text-center">LOG IN</h1>
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('Home/login/'); ?>" method="post">
                <label>Username</label>
                <input name="username" class="form-control" type="text" placeholder="Masukkan Username" value="<?php echo set_value('username'); ?>">
                <br>
                <label>Password</label>
                <input name="password" class="form-control" type="password" placeholder="Masukkan Password">
                <br>
                <h5 class="text-center fix1">Belum punya akun? <a class="fixing" href="<?= base_url('Home/register/'); ?>">Daftar</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="LOG IN"></input>
                    <a class="fixing btn btn-danger" href="<?= base_url(); ?>">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>