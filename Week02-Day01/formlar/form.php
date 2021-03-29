<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="register.php" method="post" >
    <table border="0">


        <tr>
            <td>Ad :</td>
            <td><input type="text" name="ad" id="ad" required placeholder="Soyadinizi daxil edin"></td> <!-- required panelleri bos buraxmaqa ciaze vermir,placeholder  -->
        </tr>




        <tr>
            <td>Soyad :</td>
            <td><input type="text"name="soyad"id="soyad" required="Zehmet olmasa xananni doldurun" placeholder="Soyadinizi daxil edin"></td>
        </tr>



        <tr>
            <td>Parol :</td>
            <td><input type="text"name="parol"id="parol" required placeholder="Parolunuzu daxil edin"></td>
        </tr>



        <tr
        <td colspan="2">
            Qadin<input type="radio"name="cinsiyyet" id="cinsiyet"  value="Qadin">
            Kisi<input type="radio" name="cinsiyyet" id="cinsiyet" value="Kisi">
        </td>

        </tr>


        <tr>
            <td>MAİL:</td>
            <td><input type="email" name="mail" id="mail" required></td>
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