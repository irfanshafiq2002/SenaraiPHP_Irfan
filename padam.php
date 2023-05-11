<?php
$istilah = $_GET['istilah'];
$filename = "istilah/$istilah";
unlink($filename);
header('location: index.php');
