<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css">
    <title>Simple Note</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <p class="nav-brand">Simple Note</p>
            <ul class="items">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('Home/login/'); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Home/register/'); ?>">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="jumbotron jumbotron-fluid">
        <h1 class="text-center">Simple Note</h1>
        <h3 class="text-center fix1">Make your life simpler</h3>
        <h4 class="text-center fix1">Catat apa saja yang Anda temukan Mudah Aman dan Gratis</h3>
        <h5 class="text-center pt-4"><a class="fixing" href="<?= base_url('Home/register/'); ?>">Daftar</a> dan bergabunglah dengan kami</h5>
        <h5 class="text-center fix1">Sudah punya akun? <a class="fixing" href="<?= base_url('Home/login/'); ?>">Log In</a></h5>
    </header>
    <div class="container pt-4 pb-4">
        <div class="row text-center">
            <h1 class="pb-4">Features</h1>
            <div class="col-md-3 col-sm-6 pb-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item item1">Note App</li>
                        <li class="list-group-item item2">Gunakan sebagai catatan, buku harian, atau bahkan arsip pribadi</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pb-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item item1">Full control</li>
                        <li class="list-group-item item2">Selain membuat catatan, Anda dapat mengubah catatan atau menghapusnya</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pb-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item item1">Free Unlimited</li>
                        <li class="list-group-item item2">Anda dapat membuat banyak catatan tanpa batas secara gratis selamanya</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pb-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item item1">Safe login</li>
                        <li class="list-group-item item2">Tidak ada yang dapat melihat catatan Anda bahkan admin sekalipun</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>