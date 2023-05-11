<?php
$istilah = $_POST['istilah'];
$keterangan = $_POST['keterangan'];

$filename = "istilah/$istilah";
$f = fopen($filename, 'w');
fwrite($f, $keterangan);
fclose($f);

header('location: index.php');
