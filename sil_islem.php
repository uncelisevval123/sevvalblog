<?php
require "connection.php";

$id = $_GET["id"];

$sil = $db->prepare("DELETE FROM users WHERE id=?");
$sil->execute([$id]);

header("Location: liste.php?silindi=1");
exit;
?>
