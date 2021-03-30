<?php 

$eded1 = $_POST["number_1"];

$eded2 = $_POST["number_2"];

if ($eded2==0 and $_POST["operation"]=="/") {

    echo "o-a bolmek olmaz";
}
elseif (gettype($eded1)!= "integer" and gettype($eded2)!= "integer") {
    echo "Zehmet olmasa reqem girin";
}
else
    {
        switch ($_POST["operation"])
        {
            case '+':
                echo $eded1 + $eded2;
                break;
            case '-':
                echo $eded1 - $eded2;
                break;

            case '*':
                echo $eded1 * $eded2;
                break;

            case '/':
                echo $eded1 / $eded2;
                break;

            default:
                echo "Problem Tapildi";
                break;
        }


}


    ?>