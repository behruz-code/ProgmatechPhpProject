<?php

$meyveler = ['Alma','Banan','Heyva','Qarpiz','Uzum'];

function add_arry($array,$index,$add_element){

   $array[$index]=$add_element;
   print_r($array);
}

add_arry($meyveler,1,"Nar");


?>