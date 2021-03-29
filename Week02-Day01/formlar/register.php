<?php
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$parol = $_POST["parol"];
$cinsiyet = $_POST["cinsiyyet"];
$mail = $_POST["mail"];
$controller = [];
function mailAxtar($girilen_mail,$text){


}

/*$data["name"] = $ad;
$data["surname"] = $soyad;
$data["parol"] = $parol;
$data["cinsiyyet"] = $cinsiyet;
$data["mail"] = $mail;
*/

$inData = [
    "name"=>$ad,
    "surname"=>$soyad,
    "password"=>"$parol",
    "gender"=>"$cinsiyet",
    "mail"=>"$mail"  ];








$jsonfile = json_encode($inData);
$file = fopen("data.txt", "a");
fwrite($file, "$jsonfile\r\n");
fclose($file);












?>