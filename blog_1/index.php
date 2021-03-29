<?php
//include "form.php";

$name = $_POST["username"];
$surname = $_POST["surname"];
$mail = $_POST["mail"];
$password = $_POST["password"];

if ($_POST["yes"]="on") {
echo "tesdiq olundu";

}



    /*try {
    $mysql = new PDO("mysql:host=localhost; dbname=blog_test", 'root', "");
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();

}

*/




?>
