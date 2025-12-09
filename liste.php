<?php 
require "connection.php";
$veriler = $db->query("SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Listesi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #c9c9c9; }
        .table-container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        /* GERİ BUTONU */
        .geri-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="table-container">
    <div class="d-flex justify-content-between mb-3">
        <h3>Kayıt Listesi</h3>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Adres</th>
                <th>Yorum</th>
                <th>İşlem</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($veriler as $v): ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['ad'] ?></td>
                <td><?= $v['soyad'] ?></td>
                <td><?= $v['email'] ?></td>
                <td><?= $v['tel'] ?></td>
                <td><?= $v['adres'] ?></td>
                <td><?= $v['yorum'] ?></td>

                <td>
                    <a href="update.php?id=<?= $v['id'] ?>" class="btn btn-warning btn-sm">Düzenle</a>
                    <a href="sil.php?id=<?= $v['id'] ?>" class="btn btn-danger btn-sm">Sil</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- GERİ BUTONU -->
<a href="form.php" class="btn btn-primary geri-btn">← Geri</a>

</body>
</html>
