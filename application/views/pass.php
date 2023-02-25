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
            <h1 class="text-center">Ubah Password</h1>
            <form method="post">
                <label>Password Lama</label>
                <input name="pl" class="form-control" type="password" required placeholder="Masukkan Password Lama">
                <?php echo $this->session->flashdata('pesan1'); ?>
                <br>
                <label class="">Password Baru</label>
                <input name="pb" class="form-control" type="password" required placeholder="Masukkan Password Baru">
                <br>
                <label>Konfirmasi Password Baru</label>
                <input name="pk" class="form-control" type="password" required placeholder="Konfirmasi Password Baru">
                <?php echo $this->session->flashdata('pesan2'); ?>
                <br>
                <label class="vace"></label>
                <div class="d-flex justify-content-between">
                    <button name="user" type="submit" class="btn btn-success">SIMPAN</button>
                    <a href="<?= base_url('User'); ?>" class="btn btn-danger">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>