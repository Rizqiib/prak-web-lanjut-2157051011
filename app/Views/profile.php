<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

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