<?php $id = $_GET["id"]; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Sil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #7a7a7a; }

        .confirm-box {
            max-width: 500px;
            margin: 120px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

<div class="confirm-box">
    <h4>Bu kaydı silmek istediğine emin misin?</h4>

    <div class="mt-4 d-flex justify-content-between">
        <a href="sil_islem.php?id=<?= $id ?>" class="btn btn-danger btn-lg">Evet</a>
        <a href="liste.php" class="btn btn-secondary btn-lg">Hayır</a>
    </div>
</div>

</body>
</html>
