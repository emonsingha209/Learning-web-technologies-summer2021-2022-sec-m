<?php
$number1 = 10;
$number2 = 20;
$number3 = 30;

if($number1 > $number2 && $number1 > $number3)
	echo $number1 . "is largest number. <br>";
else if($number2 > $number1 && $number2 > $number3)
	echo $number2 . "is largest number. <br>";
else if($number3 > $number1 && $number3 > $number2)
	echo $number3 . "is largest number. <br>";
?>