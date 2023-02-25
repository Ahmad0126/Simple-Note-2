<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>main.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <title>Daftar Simple Note</title>
</head>
<body>
    <div class="content pb-2 pt-3">
        <div class="forum">
            <h1 class="text-center">DAFTAR</h1>
            <form action="<?= base_url('Home/register/'); ?>" method="post">
                <label>Nama</label>
                <input name="nama" class="form-control" type="text" required placeholder="Masukkan Nama Lengkap" value="<?php echo set_value('nama'); ?>">
                <label class="pt-4">Email</label>
                <input name="email" class="form-control" type="text" required placeholder="Masukkan Email Anda" value="<?php echo set_value('email'); ?>">
                <br>
                <label>Username</label>
                <input name="username" class="form-control" type="text" required placeholder="Masukkan Username" value="<?php echo set_value('username'); ?>">
                <?php echo form_error('username', '<small class="text-danger">', '</small>'); ?>
                <br>
                <label>Password</label>
                <input name="password" class="form-control" type="password" required placeholder="Masukkan Password" value="<?php echo set_value('password'); ?>">
                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                <br>
                <label class="pt-4">Umur</label>
                <select required name="umur" class="form-select">
                    <option selected>Masukkan Umur</option>
                    <option value="< 20 Tahun">< 20 Tahun</option>
                    <option value="20-29 Tahun">20-29 Tahun</option>
                    <option value="30-39 Tahun">30-39 Tahun</option>
                    <option value="40-49 Tahun">40-49 Tahun</option>
                    <option value="> 50 Tahun">> 50 Tahun</option>
                </select>
                <br>
                <h5 class="text-center fix1">Sudah punya akun? <a class="fixing" href="<?= base_url('Home/login/'); ?>">Log In</a></h5>
                <br>
                <div class="d-flex justify-content-between">
                    <input name="daftar" type="submit" class="btn btn-success" value="DAFTAR"></input>
                    <a class="fixing btn btn-danger" href="<?= base_url(); ?>">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>