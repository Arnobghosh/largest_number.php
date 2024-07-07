<?php
 $num1 = 4;
 $num2 = 5;
 $num3 = 6;
 
 if(($num1>$num2) && ($num1>$num3)){
     echo "The largest number is Num1 : $num1";
 }
 else{
    if($num2>$num3){
     echo "The largest number is Num2 : $num2";
    }
    else{
        echo "The largest number is Num3 : $num3";
    }
 }
?>