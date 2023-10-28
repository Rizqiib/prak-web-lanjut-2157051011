<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->extend('layouts/app') ?>
    <?= $this->section('content') ?>

    <div class="container">
        <div class="list-box">
            <h1 class="mb-0 text-center">Tabel Kelas</h3>
            <a href="<?= base_url('/kelas/create') ?>" class="btn btn-dark mb-3" style="text-decoration: none; color: white; display: flex; justify-content: space-between; align-items: center;">
                Create Class
                <span style="display: flex; align-items: center;">
                    <i class='bx bxs-user-plus' style="margin-left: 5px;"></i>
                </span>
            </a>

            <div class="list-table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        foreach($kelas as $kelas){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $kelas['nama_kelas']?></td>                                      
                            <td>
                            <div class="wrap-icon">
                                <a class="btn btn-primary" href="<?= base_url('kelas/' . $kelas['id'])?>"><i class='bx bxs-user-detail' class=""></i></a>
                                <a class="btn btn-dark me-2" href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>"><i class='bx bxs-edit' ></i></a>
                                <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger"">
                                    <i class='bx bxs-trash ' ></i>
                                </button>
                                </form>                   
                            </div>
                            </td>
                        </tr>                                                                                  
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>  
        </div>
    </div>
    <?= $this->endSection('content') ?>
</body>
</html>