<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="register.php" method="POST" >
    <table border = "0">


        <tr>
            <td>Ad :</td>
            <td><input type="text" name="ad" id="ad" required placeholder="Soyadinizi daxil edin"></td> <!-- required panelleri bos buraxmaqa icaze vermir,placeholder  -->
        </tr>




        <tr>
            <td>Soyad :</td>
            <td><input type="text" name="soyad"id="soyad" required="Zehmet olmasa xananni doldurun" placeholder="Soyadinizi daxil edin"></td>
        </tr>



        <tr>
            <td>Parol :</td>
            <td><input type="password" name="parol"id="parol" required placeholder="Parolunuzu daxil edin"></td>
        </tr>
        

        <tr>
            <td>Mail:</td>
            <td><input type="email" name="mail" id="mail" required placeholder="zehmet olmasa maili girin"></td>
        </tr>



        <tr>
            <td colspan="2">
                Parolumu tesdiq edirem: <input type="checkbox" name="accept" id="accept" >
            </td>
        </tr>


        <tr>
            <td colspan="2">
                <input type="submit" name="kaydet" id="kaydet" value="Saxla">
                <input type="reset" name="sil" id="sil" value="Reset">
            </td>
        </tr>
    </table>

</form>
</body>
</html>