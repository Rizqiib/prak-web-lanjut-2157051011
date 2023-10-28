<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<body>
    <center>
        <div class="home">
            <div class="profile">
                <div class="box-profile">
                    <div class="img">
                        <img src="<?= $user['foto'] ?? base_url('assets/img/pp.jpg');?>" class="round-image">
                    </div>
                    <div class="box-data">
                        <p class="title">Nama Lengkap</p>
                        <h1 class="data"><?=$user['nama']?></h1>
                    </div>
                    <div class="box-data">
                        <p class="title">Kelas</p>
                        <h1 class="data"><?=$user['nama_kelas']?></h1>
                    </div>
                    <div class="box-data">
                        <p class="title">NPM</p>
                        <h1 class="data"><?=$user['npm']?></h1>
                    </div>
                </div>
    
            </div>
        </div>
    </center>
<?= $this->endSection('content') ?>