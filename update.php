<?php
require "connection.php";

$id = $_GET["id"];
$sorgu = $db->prepare("SELECT * FROM users WHERE id=?");
$sorgu->execute([$id]);
$row = $sorgu->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Güncelle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #868484; }
        .form-container {
            max-width: 650px;
            margin: 60px auto;
            padding: 25px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

<div class="form-container">
    <h3 class="mb-3">Kayıt Güncelle</h3>

    <form method="POST" action="update_islem.php">

        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <div class="row g-3">

            <div class="col-md-6">
                <input type="text" name="ad" class="form-control" value="<?= $row['ad'] ?>" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="soyad" class="form-control" value="<?= $row['soyad'] ?>" required>
            </div>

            <div class="col-md-6">
                <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="tel" class="form-control" value="<?= $row['tel'] ?>" required>
            </div>

            <div class="col-12">
                <input type="text" name="adres" class="form-control" value="<?= $row['adres'] ?>" required>
            </div>

            <div class="col-12">
                <textarea name="yorum" class="form-control" rows="4"><?= $row['yorum'] ?></textarea>
            </div>

            <div class="col-12 d-flex justify-content-between mt-3">
                <button class="btn btn-success" type="submit">Kaydı Güncelle</button>
                <a href="liste.php" class="btn btn-secondary">Geri Dön</a>
            </div>

        </div>

    </form>
</div>

</body>
</html>
