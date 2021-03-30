<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

    <form action="" method="POST">

        Ad: <input type="Text" name="name"> <?php if (empty($_POST["name"])){echo "Ad qeyd olunmuyub";} ?><br>
        Soyad: <input type="Text" name="surname"> <?php if (empty($_POST["surname"])){echo "Soyad qeyd olunmuyub";} ?><br>
        Password: <input type="password" name="password"> <?php if (empty($_POST["password"])){echo "Password qeyd olunmuyub";} ?><br>
        Mail: <input type="Text" name="mail"> <?php if (empty($_POST["mail"])){echo "mail qeyd olunmuyub";} ?><br>
        Tel:<input type="text" name="tel_number"> <?php if (empty($_POST["tel_number"])){echo "Telefon nomresi qeyd olunmuyub";} ?><br>
        Kisi<input type="radio" name="gender" value="Kisi"><br>
        Qadin<input type="radio" name="gender" value="Qadin"><br>
        <?php if (empty($_POST["gender"])){echo "Cinsiyyet qeyd olunmuyub";} ?><br><br>
             <input type="submit" value="Gonder">

    </form>
<?php
if (isset($_POST)) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        $tel = $_POST["tel_number"];
        //$gender = $_POST["gender"];
}

?>


</body>
</html>