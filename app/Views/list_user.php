<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
    <div class="list-box">
        <h1 class="mb-0 text-center">Tabel User</h3>

        <a href="<?= base_url('/user/create') ?>" class="btn btn-dark mb-3" style="text-decoration: none; color: white; display: flex; justify-content: space-between; align-items: center;">
            Create User
            <span style="display: flex; align-items: center;">
                <i class='bx bxs-user-plus' style="margin-left: 5px;"></i>
            </span>
        </a>


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
                                <a class="btn btn-primary" href="<?= base_url('user/' . $user['id'])?>"><i class='bx bxs-user-detail' class=""></i></a>
                                <a class="btn btn-dark me-2" href="<?= base_url('user/' . $user['id'] . '/edit') ?>"><i class='bx bxs-edit' ></i></a>
                                <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button class="btn btn-danger">
                                        <i class='bx bxs-trash ' ></i>
                                    </button>
                                </form>  
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>

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