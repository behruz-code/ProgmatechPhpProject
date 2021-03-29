<?php 

$eded1 = $_POST["number_1"];

$eded2 = $_POST["number_2"];
if ($eded2==0 and $_POST["operation"]=="/") {

    echo "o-a bolmek olmaz";
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