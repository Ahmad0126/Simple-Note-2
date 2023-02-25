<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
        .danger{
            color: red;
        }
        .merger{
            margin-right: 7px;
        }
        .nav-brand{color: #f4f4f4;}
        .navbar{
            background: rgb(132, 0, 255);
        }
        .items{
            display: flex;
            list-style: none;
            margin-bottom: 0px;
        }
        .nav-link{
            color: #f4f4f4;
            cursor: pointer;
            background: transparent;
        }
        .nav-link{
            color: white;
            margin: 0px 15px;
            padding: 6px 15px;
            transition: all 0.3s;
            border: none;
            border-radius: 5px;
        }
        .nav-link:hover{
            background: #f4f4f4;
            color: black;
            border: none;
            border-radius: 5px;
        }
        body{
            height: 100vh;
            background-image: linear-gradient(0deg, #dbafc0, #7becf2);
        }
        .row{
            margin-right: 0px; 
        }
    </style>
    <title>Simple Note User</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="items">
                <li class="nav-item active">
                    <a href="<?= base_url('User/profile/'); ?>" class="nav-link">Profil</a>
                </li>
            </ul>
            <ul class="items">
                <li class="nav-item">
                    <a href="<?= base_url('Home/logout/'); ?>" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-6">
            <table class="table table-striped">
                <?php
                if($note == false){
                    echo "<p class='text-center'>Belum ada catatan.</p>";
                }else{
                    foreach($note as $fer){
                ?>
                <tr>
                    <td><h5><?= $fer['judul']; ?></h5></td>
                    <td>
                        <a href="<?= base_url('User/see?id='.$fer['noteid']); ?>" class='btn btn-primary merger'>Lihat/Edit</a>
                    </td>
                    <td>
                        <a href="<?= base_url('User/dell?id='.$fer['noteid']); ?>" class='btn btn-danger'>Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                }
                if($notes == true){
                    $id = $notes->noteid;
                    $judul = $notes->judul;
                    $catatan = $notes->catatan;
                }else{
                    $id = false;
                    $judul = '';
                    $catatan = '';
                }
                ?>
            </table>
        </div>
        <div class="col-6">
            <form action="<?= base_url('User/save?id='.$id); ?>" method='post'>
                <input type='text' name='judul' placeholder='Masukkan Judul' class='form-control mt-2' value="<?= $judul ?>" required>
                <textarea class='form-control mt-2' name='catatan' rows='10' placeholder='Buat Catatan Baru'><?= $catatan ?></textarea>
                <button type='submit' name='simpan' value='' class='btn btn-success mt-2'>Simpan</button>
                <a href="<?= base_url('User'); ?>" class="btn btn-danger mt-2">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>