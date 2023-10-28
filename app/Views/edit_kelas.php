<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div>
                    <div class="form-wrap">
                        <div class="form-header d-flex align-items-center justify-content-between mb-3">
                            <div class="title">
                                <h4 class="mb-1">Edit Kelas</h4>
                            </div>
                        </div>
                        <div class="form">
                            <form action="<?= base_url('/kelas/' . $kelas['id'])?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="floatingInput">Nama Kelas</label>
                                    <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('nama_kelas'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <input type="text" id="floatingInput" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>"  placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                                </div>
                                <div class="submit-wrap align-items-center">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input class="btn btn-dark save" type="submit" value="Edit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?= $this->endSection('content') ?>
</body>
</html>