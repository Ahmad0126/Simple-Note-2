<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <style>
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
    </style>
    <title>Simple Note Admin</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="items">
                <li class="nav-item active">
                    <a href="Home/register" class="nav-link">Buat Baru</a>
                </li>
            </ul>
            <ul class="items">
                <li class="nav-item">
                    <a href="<?= base_url('Home/logout/'); ?>" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= $this->session->flashdata('pesan'); ?>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Usia</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($users as $fer) { if($fer['userid'] != '1'){ ?>
            <tr>
                <td><?php echo $fer['userid']; ?></td>
                <td><?php echo $fer['nama']; ?></td>
                <td><?php echo $fer['username']; ?></td>
                <td><?php echo $fer['email']; ?></td> 
                <td><?php echo $fer['usia']; ?></td>
                <td>
                    <a href="<?= base_url('Admin/del?id='.$fer['userid']); ?>" class='btn btn-danger'>Hapus User <?= $fer['userid']; ?></a>
                </td>
            </tr>
            <?php
                }
            } 
            ?>
        </table>
    </div>
</body>
</html>