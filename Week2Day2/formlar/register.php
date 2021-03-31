<?php
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$parol = $_POST["parol"];
$mail = $_POST["mail"];
$controller = [];

$inData = [
    "name"=>$ad,
    "surname"=>$soyad,
    "password"=>"$parol",
    "mail"=>"$mail"  ];

$jsonfile = json_encode($inData);
$file = fopen("data.txt", "a");
fwrite($file, "$jsonfile\r\n");
fclose($file);
require "browser_chec.php";
?>