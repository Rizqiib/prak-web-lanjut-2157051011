<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
    <div class="list-box">
        <h1 class="mb-0 text-center">Tabel User</h3>
        <div class="list-table">
            <table class="table table-hover">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>NPM</td>
                  <td>Kelas</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                      <a class="btn btn-primary" href=""><i class='bx bxs-user-detail'></i></a>
                      <a class="btn btn-warning" href=""><i class='bx bxs-edit' ></i></a>
                      <a class="btn btn-danger" href=""><i class='bx bxs-trash' ></i></a>
                    </td>
                  </tr>
                <?php }
                ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>