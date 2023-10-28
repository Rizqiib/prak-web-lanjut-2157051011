<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>
    <body>
        <div class="home">
            <div class="profile">
                <div class="box-profile">
                    <div class="img">
                        <img src="<?=base_url('assets/img/pp.jpg');?>">
                    </div>
                    <div class="box-data">
                        <p class="title">Nama Lengkap</p>
                        <h1 class="data"><?=$nama?></h1>
                    </div>
                    <div class="box-data">
                        <p class="title">Kelas</p>
                        <h1 class="data"><?=$kelas?></h1>
                    </div>
                    <div class="box-data">
                        <p class="title">NPM</p>
                        <h1 class="data"><?=$npm?></h1>
                    </div>
                </div>

            </div>
        </div>
    <?= $this->endSection('content') ?>


    <center><img src="<?= base_url('assets/img/pp.jpg')?>" alt="" class="round-image"><br>


    <center><img src="<?= base_url('assets/img/pp.jpg')?>" alt="" class="round-image"><br>

    <div>
        <div class="outlined-box">
            <tr>
                <td><?= $nama ?></td>
            </tr><br>
        </div>
        <div class="outlined-box">
            <tr>
                <td><?= $kelas ?></td>
            </tr><br>
        </div>
        <div class="outlined-box">
            <tr>
                <td><?= $npm ?></td>
            </tr>
        </div>
    </div>
    </center>

</body>
</html>