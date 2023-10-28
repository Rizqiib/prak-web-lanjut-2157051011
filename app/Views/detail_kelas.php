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
            <h1 class="mb-0 text-center">Detail Kelas</h1>
            
            <div class="table table-hover">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        foreach($kelas as $kelas){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $kelas['nama']?></td>                            
                            <td><?= $kelas['npm']?></td>                              
                            <td><?= $kelas['nama_kelas']?></td>             
                        </tr>                                                                                  
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?= $this->endSection('content') ?>
</body>
</html>