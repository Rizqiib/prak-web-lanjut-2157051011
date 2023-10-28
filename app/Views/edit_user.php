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
    <div class="container">
        <div class="form-box">

            <h1 class="mb-0">Edit User</h1>

            <h1 class="mb-0">Form Controllers</h1>

            <div class="form">
                <form action="<?= base_url('/user/'. $user['id']);?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama" name="nama" value="<?= $user['nama'] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('npm'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>">
                    </div> 
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-select mt-2" id="floatingSelect" aria-label="Default select example" name="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                            <?php
                                foreach ($kelas as $item) {
                            ?>
                                <option value="<?= $item['id'] ?>"<?=$user['id_kelas']== $item['id'] ? 'selected' : '' ?> ><?= $item['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div> 

                    <div class="mb-3 ">
                        <img src="<?= $user['foto'] ?? '<default-foto>'?>" class="mb-3" style="width : 100px; padding : 10px 10px;"><br>
                        <input type="file" name="foto" id="foto">
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>
                    <input class="btn btn-dark" type="submit" value="Save Edit">
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection('content') ?>

</body>
</html>