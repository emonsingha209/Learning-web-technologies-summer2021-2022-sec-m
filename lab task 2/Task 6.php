<?php
$number = [3,4,5,6,7,8,9];
$n = 5;


for($i=0; $i<sizeof($number); $i++)
	if($number[$i] == $n)
		echo "Number " . $n . " is exists in the array. <br> "; 
?>