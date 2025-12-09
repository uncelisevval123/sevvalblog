<?php
include "connection.php";

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$email = $_POST["email"];
$telefon = $_POST["tel"];
$adres = $_POST["adres"];
$yorum = $_POST["yorum"];

$kayit = $db->prepare("INSERT INTO users (ad, soyad, email, tel, adres, yorum) 
VALUES (?, ?, ?, ?, ?, ?)");
$kayit->execute([$ad, $soyad, $email, $telefon, $adres, $yorum]);

echo "Kayıt başarılı!";
?>


