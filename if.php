<?php 
$number1 = 20;
$number2 = 5;

if($number1 > $number2){
    echo "الرقم الأول أكبر";

    if($number1 === 20){
        echo "<br>";
        echo "الرقم عشرون";
    }
}else if($number1 < $number2){
    echo "الرقم الثاني أصغر";
}else{
    echo "الرقمين متساويين";
}

?>