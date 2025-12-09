<?php
require "connection.php";

$id    = $_POST["id"];
$ad    = $_POST["ad"];
$soyad = $_POST["soyad"];
$email = $_POST["email"];
$tel   = $_POST["tel"];
$adres = $_POST["adres"];
$yorum = $_POST["yorum"];

$guncelle = $db->prepare("
UPDATE users SET ad=?, soyad=?, email=?, tel=?, adres=?, yorum=? WHERE id=?
");
$guncelle->execute([$ad, $soyad, $email, $tel, $adres, $yorum, $id]);

header("Location: liste.php?guncellendi=1");
exit;
