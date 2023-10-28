<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <div class="form-container">
        <h2>Input Data Mahasiswa</h2>
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="nama" required>
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <select name="kelas" id="kelas">
                    <option value="" selected disabled>Pilih Kelas</option>
                        <?php
                            foreach ($kelas as $item) {
                        ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php 
                    } 
                    ?>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>